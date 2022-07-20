<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('UserModel', 'um');

		// **
		// get user session
		$this->user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

	}

	public function profile()
    {
        $data['alluser'] = $this->um->get_all_data_user();
		$data['title'] = "Profil";
		$data['user'] = $this->user;

        $this->load->view('templates/header', $data);
        $this->load->view('user/profil', $data);
        $this->load->view('templates/footer');
    }

	public function edit($user_id)
	{
		$data['title'] = "Edit Profil";
		$data['user'] = $this->db->get_where('user', ['user_id' => $user_id])->row_array();
		$data['user'] = $this->user;

		$this->load->view('templates/header', $data);
		$this->load->view('user/edit_profil', $data);
		$this->load->view('templates/footer');
	}

	public function editprofil()
	{

		$this->db->set('nama', $this->input->post('nama'));
		$this->db->set('jenis_kelamin', $this->input->post('jenis_kelamin'));
		$this->db->set('no_telp', $this->input->post('no_telp'));
		$this->db->set('email', $this->input->post('email'));
		$this->db->where('user_id', $this->input->post('user_id'));
		$this->db->update('user');

		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Berhasil!</strong>Profil sudah di edit.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');

		redirect('profil');
	}
}