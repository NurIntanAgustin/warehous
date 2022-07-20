<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('TarifModel', 'tm');

        // **
		// get user session
		$this->user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

	}

    public function index()
    {
        $data['title'] = "Beranda";
        $data['user'] = $this->user;

        $this->load->view('templates/header', $data);
        $this->load->view('beranda', $data);
        $this->load->view('templates/footer');
    }
    public function tentang()
    {
        $data['alltarif'] = $this->tm->get_all_data_tarif();
        $data['title'] = "Tentang Kami";
        $data['user'] = $this->user;

        $this->load->view('templates/header', $data);
        $this->load->view('tentang', $data);
        $this->load->view('templates/footer');
    }
}