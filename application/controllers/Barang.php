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
        $this->load->model('MetodePembayaranModel', 'metode_pembayaran_model');

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
            $config['max_size']  = '2000';
            
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
        // **
        // alltagihan where condition
        $where = array();
        $where['r.user_id'] = $this->session->userdata('user_id');
        $where['tg.status_tf !='] = 'Pembayaran Berhasil';
        $data['alltagihan'] = $this->tgm->get_all_data_tagihan($where);

        // **
        // riwayat_tagihan where condition
        unset($where['tg.status_tf !=']);
        $where['tg.status_tf'] = 'Pembayaran Berhasil';
        $data['riwayat_tagihan'] = $this->tgm->get_all_data_tagihan($where);

        $data['title'] = "Tagihan";
        $data['user'] = $this->user;

        $this->load->view('templates/header', $data);
        $this->load->view('barang/tagihan', $data);
        $this->load->view('templates/footer');
    }

    public function detail_tagihan($tagihan_id)
    {
        $data['alltagihan'] = $this->tgm->get_all_data_tagihan(array('tg.tagihan_id' => $tagihan_id));
        $data['metode_pembayaran_list'] = $this->metode_pembayaran_model->get_all_data_metode();
        $data['user'] = $this->user;
        $data['title'] = "Tagihan";

        $this->load->view('templates/header', $data);
        $this->load->view('barang/detail_tagihan', $data);
        $this->load->view('templates/footer');
    }

    function upload_bukti_transfer()
    {
        $tagihan_id = $this->input->post('tagihan_id');
        try {
            // get detail tagihan
            $tagihan_list = $this->tgm->get_all_data_tagihan(array('tg.tagihan_id' => $tagihan_id));
            if (count($tagihan_list) < 1) throw new Exception('Tagihan dengan id tersebut tidak ada', 400);
            $tagihan_details = $tagihan_list[0];

            $config['upload_path'] = 'assets/img/activity/bukti_transfer_konsumen/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']  = '2000'; // +- 2 MB
            $config['file_name']  = 'bukti_tf_'.$tagihan_details['resi'];
            $config['overwrite']  = TRUE;

            $this->load->library('upload', $config);
            
            if ( ! $this->upload->do_upload('bukti_tf')){
                $this->session->set_flashdata('form', $data);
                throw new Exception($this->upload->display_errors());
            }
            else{
                $uploaded_image = array('upload_data' => $this->upload->data());
            }

            // where condition to update  table
            $this->db->where('tagihan_id', $tagihan_id);

            // set flashdata when successfully update
            if ($this->db->update('tagihan', array('bukti_tf' => $config['file_name'].$uploaded_image['upload_data']['file_ext']))) $this->session->set_flashdata('bukti_tf_uploaded', 1);
        } catch (Exception $e) {
            $this->session->set_flashdata('bukti_tf_uploaded', 2);
            $this->session->set_flashdata('bukti_tf_failed_message', $e->getMessage());
        }
        redirect('barang/detail_tagihan/'.$tagihan_id);
    }

    public function status()
    {
        // **
        // alltagihan where condition
        $where = array();
        $where['r.user_id'] = $this->session->userdata('user_id');
        $where['l.status !='] = 'Tiba di Warehouse Indonesia';
        $data['allstatus'] = $this->lm->get_all_data_logistik($where);
        // **
        // riwayat_tagihan where condition
        unset($where['l.status !=']);
        $where['l.status'] = 'Tiba di Warehouse Indonesia';

        $data['riwayat_pengiriman'] = $this->lm->get_all_data_logistik($where);

        $data['user'] = $this->user;
        $data['title'] = "Status";

        /*// **
		// where condition for getting pesanan list
		$where = array();
		$where['logistik.user_id'] = $this->session->userdata()['user_id'];*/

        // **
		// data to show on page
		// $data['logistik_list'] = $this->lm->logistik_list();
        // $data['resi_list'] = $this->rm->resi_get_list();

        $this->load->view('templates/header', $data);
        $this->load->view('barang/status', $data);
        $this->load->view('templates/footer');
    }

    public function detail_status($log_id)
    {
        $data['allstatus'] = $this->lm->get_all_data_logistik();
        $data['user'] = $this->user;
        $data['title'] = "Status";

        // **
		// where condition for getting pesanan list
		$where = array();
		$where['l.resi_id'] = $log_id;

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