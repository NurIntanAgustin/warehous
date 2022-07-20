<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('PaketModel', 'pm');
        $this->load->model('PengirimanModel', 'pgm');
        $this->load->model('LogistikModel', 'lm');
        $this->load->model('ResiModel', 'rm');
        $this->load->model('TarifModel', 'tm');
        $this->load->model('FeeModel', 'fm');
        $this->load->model('TagihanModel', 'tgm');

        // **
		// get user session
		$this->user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

	}

    public function index()
    {
        
    }
    
    public function form()
    {
        $data['title'] = "Resi";
        $data['paket_list'] = $this->pm->paket_get_list();
        $data['pengiriman_list'] = $this->pgm->pengiriman_get_list();
        $data['user'] = $this->user;

        $this->load->view('templates/header', $data);
        $this->load->view('barang/resi', $data);
        $this->load->view('templates/footer');
    }

    public function simpanresi()
	{
		$data = [
			'nama_barang' => $this->input->post('nama_barang'),
			'resi' => $this->input->post('resi'),
			'tgl_kirim' => $this->input->post('tgl_kirim'),
            'paket_id' => $this->input->post('paket_id'),
			'pengiriman_id' => $this->input->post('pengiriman_id'),
            'gambar_barang' => $this->input->post('gambar_barang'),
		];
		$this->db->insert('resi', $data);

		redirect('barang/resi');
	}

    public function tagihan()
    {
        $data['alltagihan'] = $this->tgm->get_all_data_tagihan();
        $data['title'] = "Tagihan";
        $data['user'] = $this->user;

        $this->load->view('templates/header', $data);
        $this->load->view('barang/tagihan', $data);
        $this->load->view('templates/footer');
    }

    public function detail_tagihan()
    {
        $data['alltagihan'] = $this->tgm->get_all_data_tagihan();
        $data['user'] = $this->user;
        $data['title'] = "Tagihan";

        $this->load->view('templates/header', $data);
        $this->load->view('barang/detail_tagihan', $data);
        $this->load->view('templates/footer');
    }

    public function status()
    {
        $data['allstatus'] = $this->lm->get_all_data_logistik();
        $data['user'] = $this->user;
        $data['title'] = "Status";

                // **
		// where condition for getting pesanan list
		$where = array();
		$where['logistik.user_id'] = $this->session->userdata()['user_id'];

        // **
		// data to show on page
		$data['logistik_list'] = $this->lm->logistik_list($where);
        $data['resi_list'] = $this->rm->resi_get_list();

        $this->load->view('templates/header', $data);
        $this->load->view('barang/status', $data);
        $this->load->view('templates/footer');
    }

    public function detail_status()
    {
        $data['allstatus'] = $this->lm->get_all_data_logistik();
        $data['user'] = $this->user;
        $data['title'] = "Status";

        // **
		// where condition for getting pesanan list
		$where = array();
		$where['logistik.user_id'] = $this->session->userdata()['user_id'];

        // **
		// data to show on page
		$data['logistik_list'] = $this->lm->logistik_list($where);
        $data['resi_list'] = $this->rm->resi_get_list();

        $this->load->view('templates/header', $data);
        $this->load->view('barang/detail_status', $data);
        $this->load->view('templates/footer');
    }

}