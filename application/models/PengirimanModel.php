<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PengirimanModel extends CI_Model {

	function pengiriman_get_list($where=null)
	{
		if ($where) {
			$this->db->where($where);
		}
		$q = $this->db->get('jenis_pengiriman');
		return $result = $q->num_rows() > 0 ? $q->result_array() : array();
	}

}

/* End of file PembayaranModel.php */
/* Location: ./application/models/PembayaranModel.php */