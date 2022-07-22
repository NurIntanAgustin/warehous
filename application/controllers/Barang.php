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
        try {
            $data = [
                'user_id' => $this->session->userdata('user_id'),
                'nama_barang' => $this->input->post('nama_barang'),
                'jumlah_barang' => $this->input->post('jumlah_barang'),
                'resi' => $this->input->post('resi'),
                'tgl_kirim' => $this->input->post('tgl_kirim'),
                'paket_id' => $this->input->post('paket_id'),
                'pengiriman_id' => $this->input->post('pengiriman_id'),
            ];

            // **
            // upload image
            $config['upload_path'] = 'assets/img/activity/resi_konsumen/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']  = '100';
            
            $this->load->library('upload', $config);
            
            if (!$this->upload->do_upload('gambar_barang')) {
                $this->session->set_flashdata('form', $data);
                throw new Exception($this->upload->display_errors());
            } else {
                $uploaded_image = array('upload_data' => $this->upload->data());
            }
            // end of upload image
            // **
            
            // add the rest of the data to the insert object
            $data['tgl_kirim'] = date('Y-m-d', strtotime($this->input->post('tgl_kirim')));
            $data['gambar_barang'] = $uploaded_image['upload_data']['file_name'];

            // set flashdata when successfully insert the resi
            if ($this->db->insert('resi', $data)) $this->session->set_flashdata('resi_uploaded', 1);
        } catch (Exception $e) {
            $this->session->set_flashdata('resi_uploaded', 2);
            $this->session->set_flashdata('resi_failed_message', $e->getMessage());
        }
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

        /*// **
		// where condition for getting pesanan list
		$where = array();
		$where['logistik.user_id'] = $this->session->userdata()['user_id'];*/

        // **
		// data to show on page
		$data['logistik_list'] = $this->lm->logistik_list();
        // $data['resi_list'] = $this->rm->resi_get_list();

        $this->load->view('templates/header', $data);
        $this->load->view('barang/status', $data);
        $this->load->view('templates/footer');
    }

    public function detail_status($resi_id)
    {
        $data['allstatus'] = $this->lm->get_all_data_logistik();
        $data['user'] = $this->user;
        $data['title'] = "Status";

        // **
		// where condition for getting pesanan list
		$where = array();
		$where['r.resi_id'] = $resi_id;

        // **
		// data to show on page
		$detail_status_list = $this->lm->logistik_list($where);
        $data['status'] = count($detail_status_list) > 0 ? $detail_status_list[0] : array();

        // $data['resi_list'] = $this->rm->resi_get_list();

        $this->load->view('templates/header', $data);
        $this->load->view('barang/detail_status', $data);
        $this->load->view('templates/footer');
    }

}