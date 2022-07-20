<?php

class ResiModel extends CI_Model
{

    public function get_all_data_resi()
	{
		$query = "SELECT r.*, u.nama, p.nama_paket, pg.nama_pengiriman FROM resi r, user u, jenis_paket p, jenis_pengiriman pg 
		WHERE r.user_id = u.user_id AND r.paket_id = p.paket_id AND r.pengiriman_id = pg.pengiriman_id";
        return $this->db->query($query)->result_array();
	}

	function resi_get_list($where = null)
	{
		if ($where) {
			$this->db->where($where);
		}
		$q = $this->db->get('resi');
		return $result = $q->num_rows() > 0 ? $q->result_array() : array();
	}


}
