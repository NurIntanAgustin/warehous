<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
        $this->load->model('UserModel', 'um');
        $this->load->model('ResiModel', 'rm');
        $this->load->model('LogistikModel', 'lm');
        $this->load->model('TagihanModel', 'tgm');
        $this->load->model('TarifModel', 'tm');
        $this->load->model('FeeModel', 'fm');
        $this->load->model('LinkModel', 'lkm');
        $this->load->model('MetodePembayaranModel', 'mpm');

        // **
		// get user session
		$this->user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

	}

    public function index()
    {
        $data['title'] = "Data Pengguna";
        $data['alluser'] = $this->um->get_all_data_user();
        $data['user'] = $this->user;

        $this->load->view('admin/data_user', $data);
    }

    public function barang()
    {
        $data['title'] = "Data Barang";
        $data['allresi'] = $this->rm->get_all_data_resi();
        $data['user'] = $this->user;

        $this->load->view('admin/data_barang', $data);
    }

    public function logistik()
    {
        $data['title'] = "Data Pengiriman";
        $data['alllogistik'] = $this->lm->get_all_data_logistik();
        $data['user'] = $this->user;

        $this->load->view('admin/data_logistik', $data);
    }

    public function logistik_create()
	{
        $data['title'] = "Tambah Pengiriman";
        $data['allresi'] = $this->rm->get_all_data_resi();
        $data['user'] = $this->user;


		$this->load->view('admin/logistik_create', $data);
	}

    public function simpanlogistik()
	{
		$data = [
			'resi_id' => $this->input->post('resi_id'),
			'box' => $this->input->post('box'),
			'resi_pengiriman' => $this->input->post('resi_pengiriman'),
			'status' => $this->input->post('status'),
            'gambar_arrived_kr' => $this->input->post('gambar_arrived_kr'),
            'gambar_arrived_ina' => $this->input->post('gambar_arrived_ina'),
		];
		$this->db->insert('logistik', $data);

		redirect('admin/data_logistik');
	}

    public function logistik_edit($log_id)
	{
		$data['title'] = "Edit Pengiriman";
        $data['resi_list'] = $this->rm->resi_get_list();
		// $data['logistik'] = $this->db->get_where('logistik', ['log_id' => $log_id])->row_array();
		$data['logistik'] = $this->lm->get_all_data_logistik(array('l.log_id' => $log_id))[0];
        $data['user'] = $this->user;

		$this->load->view('admin/logistik_edit', $data);
	}

	public function editlogistik()
	{
		try {
			$log_id = $this->input->post('logistik_id');

			$config['upload_path'] = 'assets/img/activity/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']  = '2000'; // +- 2MB
			$config['overwrite'] = TRUE;

			$field_image_list = array('gambar_arrived_kr', 'gambar_arrived_ina');

			// check each image fields if any image need to be uploaded
			foreach ($field_image_list as $list) {
				// continue loop if no image to upload selected
				if (empty($_FILES[$list]['tmp_name'])) continue;
				$config['file_name'] = str_replace('gambar_', '', "log-{$log_id}_{$list}");;
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload($list)){
					$error = array('error' => $this->upload->display_errors());
					throw new Exception('Gagal upload gambar: '.$error);
				}
				else {
					$uploaded_image = array('upload_data' => $this->upload->data());
					$this->db->set($list, $uploaded_image['upload_data']['file_name']);
				}
			}
			
			$this->db->set('resi_id', $this->input->post('resi_id'));
			$this->db->set('box', $this->input->post('box'));
			$this->db->set('resi_pengiriman', $this->input->post('resi_pengiriman'));
			$this->db->set('status', $this->input->post('status'));
			$this->db->where('log_id', $log_id);
			$this->db->update('logistik');
		} catch (Exception $e) {
			echo $e->getMessage();
		}

		redirect('admin/data_logistik');
	}

	public function logistik_hapus($log_id)
	{

		$this->db->where('log_id', $log_id);
		$this->db->delete('logistik');

		redirect('admin/data_logistik');
	}

    public function tagihan()
    {
        $data['title'] = "Data Transaksi";
        $data['alltagihan'] = $this->tgm->get_all_data_tagihan();
        $data['user'] = $this->user;

        $this->load->view('admin/data_tagihan', $data);
    }

    public function tagihan_create()
	{
        $data['title'] = "Tambah Transaksi";
        $data['alllogistik'] = $this->lm->get_all_data_logistik();
        $data['alltarif'] = $this->tm->get_all_data_tarif();
        $data['allfee'] = $this->fm->get_all_data_fee();
        $data['alllink'] = $this->lkm->get_all_data_link();
        $data['user'] = $this->user;


		$this->load->view('admin/tagihan_create', $data);
	}

    public function simpantagihan()
	{
        $tarif = $this->db->get_where('tarif', ['tarif_id' => $this->input->post('tarif_id')])->row_array();
        $fee = $this->db->get_where('fee_warehouse', ['fee_id' => $this->input->post('fee_id')])->row_array();
        $jumlahtagihan = $tarif['tarif'] * $this->input->post('berat') + $fee['fee'];

		$data = [
			'log_id' => $this->input->post('log_id'),
			'berat' => $this->input->post('berat'),
			'tarif_id' => $this->input->post('tarif_id'),
            'fee_id' => $this->input->post('fee_id'),
            'jumlah' => $jumlahtagihan,
            'status_tf' => $this->input->post('status_tf'),
            'link_id' => $this->input->post('link_id'),
		];
		$this->db->insert('tagihan', $data);

		redirect('admin/data_tagihan');
	}

    public function tagihan_edit($tagihan_id)
	{
		try {
			$data['title'] = "Edit Transaksi";
			$data['resi_list'] = $this->rm->resi_get_list();
			$data['fee_warehouse_list'] = $this->fm->get_all_data_fee();
			$data['tarif_pajak_list'] = $this->tm->get_all_data_tarif();
			$data['link_checkout_list'] = $this->lkm->get_all_data_link();

			$tagihan_list = $this->tgm->get_all_data_tagihan(array('tg.tagihan_id' => $tagihan_id));
			if (count($tagihan_list) < 1) throw new Exception('Tidak ada tagihan dengan data tersebut', 404);
			$data['tagihan'] = $tagihan_list[0];

			// $data['tagihan'] = $this->db->get_where('tagihan', ['tagihan_id' => $tagihan_id])->row_array();
	        $data['user'] = $this->user;
		} catch (Exception $e) {
			echo "<pre>";
			print_r($e->getMessage());
			echo "</pre>";
			exit;
		}
		$this->load->view('admin/tagihan_edit', $data);
	}

	public function edittagihan()
	{
        // $this->db->set('log_id', $this->input->post('log_id'));
		$this->db->set('berat', $this->input->post('berat'));
		$this->db->set('tarif_id', $this->input->post('tarif_id'));
        $this->db->set('fee_id', $this->input->post('fee_id'));
        // $this->db->set('jumlah', $jumlahtagihan);
        $this->db->set('status_tf', $this->input->post('status_tf'));
        $this->db->set('link_id', $this->input->post('link_id'));
		$this->db->where('tagihan_id', $this->input->post('tagihan_id'));
		$this->db->update('tagihan');

		redirect('admin/data_tagihan');
	}

	public function tagihan_hapus($tagihan_id)
	{

		$this->db->where('tagihan_id', $tagihan_id);
		$this->db->delete('tagihan');

		redirect('admin/data_tagihan');
	}

	public function tagihan_print($tagihan_id) {
		try {
			$data['title'] = "Data Tagihan Konsumen";
			$data['metode_pembayaran_list'] = $this->mpm->get_all_data_metode();
			$tagihan_list = $this->tgm->get_all_data_tagihan(array('tg.tagihan_id' => $tagihan_id));
			if (count($tagihan_list) < 1) throw new Exception('Tidak ada tagihan dengan id tersebut');
			$data['tagihan'] = $tagihan_list[0];
			/* $data['tagihan'] = $this->tgm->get_all_data_tagihan();
			$data['alllogistik'] = $this->lm->get_all_data_logistik();
			$data['alltarif'] = $this->tm->get_all_data_tarif();
			$data['allfee'] = $this->fm->get_all_data_fee();
			$data['alllink'] = $this->lkm->get_all_data_link();*/
		} catch (Exception $e) {
			echo "<pre>";
			print_r($e->getMessage());
			echo "</pre>";
			exit;
		}

	   $this->load->view('admin/tagihan_print', $data);
	   
	}

    public function tarif()
    {
        $data['title'] = "Tarif Kirim dan Pajak";
        $data['alltarif'] = $this->tm->get_all_data_tarif();
        $data['user'] = $this->user;

        $this->load->view('admin/data_tarif', $data);
    }

    public function tarif_create()
	{
        $data['title'] = "Tambah Tarif Kirim dan Pajak";
        $data['user'] = $this->user;


		$this->load->view('admin/tarif_create', $data);
	}

    public function simpantarif()
	{
		$data = [
			'keterangan' => $this->input->post('keterangan'),
			'tarif' => $this->input->post('tarif'),
		];
		$this->db->insert('tarif', $data);

		redirect('admin/data_tarif');
	}

    public function tarif_edit($tarif_id)
	{
		$data['title'] = "Edit Tarif Kirim dan Pajak";
		$data['tarif'] = $this->db->get_where('tarif', ['tarif_id' => $tarif_id])->row_array();
        $data['user'] = $this->user;

		$this->load->view('admin/tarif_edit', $data);
	}

	public function edittarif()
	{

		$this->db->set('keterangan', $this->input->post('keterangan'));
		$this->db->set('tarif', $this->input->post('tarif'));
		$this->db->where('tarif_id', $this->input->post('tarif_id'));
		$this->db->update('tarif');

		redirect('admin/data_tarif');
	}

	public function tarif_hapus($tarif_id)
	{

		$this->db->where('tarif_id', $tarif_id);
		$this->db->delete('tarif');

		redirect('admin/data_tarif');
	}

    public function fee()
    {
        $data['title'] = "Tarif Warehouse";
        $data['allfee'] = $this->fm->get_all_data_fee();
        $data['user'] = $this->user;

        $this->load->view('admin/data_fee', $data);
    }

    public function fee_create()
	{
        $data['title'] = "Tambah Tarif Warehouse";
        $data['user'] = $this->user;


		$this->load->view('admin/fee_create', $data);
	}

    public function simpanfee()
	{
		$data = [
			'keterangan' => $this->input->post('keterangan'),
			'fee' => $this->input->post('fee'),
		];
		$this->db->insert('fee_warehouse', $data);

		redirect('admin/data_fee');
	}

    public function fee_edit($fee_id)
	{
		$data['title'] = "Edit Tarif Warehouse";
		$data['fee'] = $this->db->get_where('fee_warehouse', ['fee_id' => $fee_id])->row_array();
        $data['user'] = $this->user;

		$this->load->view('admin/fee_edit', $data);
	}

	public function editfee()
	{

		$this->db->set('keterangan', $this->input->post('keterangan'));
		$this->db->set('fee', $this->input->post('fee'));
		$this->db->where('fee_id', $this->input->post('fee_id'));
		$this->db->update('fee_warehouse');

		redirect('admin/data_fee');
	}

	public function fee_hapus($fee_id)
	{

		$this->db->where('fee_id', $fee_id);
		$this->db->delete('fee_warehouse');

		redirect('admin/data_fee');
	}

    public function metode_pembayaran()
    {
        $data['title'] = "Metode Pembayaran";
        $data['allmetode'] = $this->mpm->get_all_data_metode();
        $data['user'] = $this->user;

        $this->load->view('admin/data_metode', $data);
    }

    public function metode_pembayaran_create()
	{
        $data['title'] = "Tambah Metode Pembayaran";
        $data['user'] = $this->user;


		$this->load->view('admin/metode_pembayaran_create', $data);
	}

    public function simpanmetode()
	{
		$data = [
			'metode_pembayaran' => $this->input->post('metode_pembayaran'),
			'no_rek' => $this->input->post('no_rek'),
            'pemilik' => $this->input->post('pemilik'),
		];
		$this->db->insert('metode_pembayaran', $data);

		redirect('admin/data_metode');
	}

    public function metode_pembayaran_edit($metode_id)
	{
		$data['title'] = "Edit Metode Pembayaran";
		$data['metode'] = $this->db->get_where('metode_pembayaran', ['metode_id' => $metode_id])->row_array();
        $data['user'] = $this->user;

		$this->load->view('admin/metode_pembayaran_edit', $data);
	}

	public function editmetode()
	{

		$this->db->set('metode_pembayaran', $this->input->post('metode_pembayaran'));
		$this->db->set('no_rek', $this->input->post('no_rek'));
		$this->db->set('pemilik', $this->input->post('pemilik'));
		$this->db->where('metode_id', $this->input->post('metode_id'));
		$this->db->update('metode_pembayaran');

		redirect('admin/data_metode');
	}

	public function metode_pembayaran_hapus($metode_id)
	{

		$this->db->where('metode_id', $metode_id);
		$this->db->delete('metode_pembayaran');

		redirect('admin/data_metode');
	}

    public function link()
    {
        $data['title'] = "Link Checkout";
        $data['alllink'] = $this->lkm->get_all_data_link();
        $data['user'] = $this->user;

        $this->load->view('admin/data_link', $data);
    }

    public function link_create()
	{
        $data['title'] = "Tambah Link Checkout";
        $data['user'] = $this->user;


		$this->load->view('admin/link_create', $data);
	}

    public function simpanlink()
	{
		$data = [
			'keterangan' => $this->input->post('keterangan'),
			'link' => $this->input->post('link'),
		];
		$this->db->insert('link_checkout', $data);

		redirect('admin/data_link');
	}    

    public function link_edit($link_id)
	{
		$data['title'] = "Edit Link";
		$data['link'] = $this->db->get_where('link_checkout', ['link_id' => $link_id])->row_array();
        $data['user'] = $this->user;

		$this->load->view('admin/link_edit', $data);
	}

	public function editlink()
	{

		$this->db->set('keterangan', $this->input->post('keterangan'));
		$this->db->set('link', $this->input->post('link'));
		$this->db->where('link_id', $this->input->post('link_id'));
		$this->db->update('link_checkout');

		redirect('admin/data_link');
	}

	public function link_hapus($link_id)
	{

		$this->db->where('link_id', $link_id);
		$this->db->delete('link_checkout');

		redirect('admin/data_link');
	}
}