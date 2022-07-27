<?php

class ResiModel extends CI_Model
{

    public function get_all_data_resi(array $where = NULL, array $like = NULL)
	{
		if ($where) $this->db->where($where);
		if ($like) $this->db->like($like);
		return $this->db
			->select('r.*, u.nama, p.nama_paket, pg.nama_pengiriman')
			->from('resi r')
			->join('jenis_paket p ', 'p.paket_id = r.paket_id')
			->join('jenis_pengiriman pg', 'pg.pengiriman_id = r.pengiriman_id')
			->join('user u', 'u.user_id = r.user_id')
			->get()
			->result_array();

		/*$query = "SELECT r.*, u.nama, p.nama_paket, pg.nama_pengiriman FROM resi r, user u, jenis_paket p, jenis_pengiriman pg 
		WHERE r.user_id = u.user_id AND r.paket_id = p.paket_id AND r.pengiriman_id = pg.pengiriman_id";
        return $this->db->query($query)->result_array();*/
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
