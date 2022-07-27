<?php

class MetodePembayaranModel extends CI_Model
{
    public $metode_id;
    public $metode_pembayaran;
    public $no_rek;
    public $pemilik;

    public function get_all_data_metode()
    {
    	return $this->db
    		->select('*')
    		->from('metode_pembayaran')
    		->get()
    		->result_array();
        /*$query = "SELECT * FROM metode_pembayaran";
        return $this->db->query($query)->result_array();*/
    }

}
