<?php


class LogistikModel extends CI_Model
{

    // public $log_id;
	public $resi_id;
	public $box;
	public $resi_pengiriman;
	public $status;
	public $gambar_arriver_kr;
	public $gambar_arriver_ina;

    public function get_all_data_logistik()
    {
        $query = "SELECT l.*, r.*, p.nama_paket, pg.nama_pengiriman FROM logistik l, resi r, jenis_paket p, jenis_pengiriman pg 
        WHERE l.resi_id = r.resi_id AND r.paket_id = p.paket_id AND r.pengiriman_id = pg.pengiriman_id";
        return $this->db->query($query)->result_array();
    }

    function logistik_list()
	{
		// **
		// where condition
		$where = array();
		$where['user_id'] = $this->session->userdata()['user_id'];

		$this->db->select('logistik.*');
		$this->db->where($where);
		$this->db->group_by('box');
		$this->db->order_by('created_at', 'desc');
		$q = $this->db->get('logistik');
		return $result = $q->num_rows() > 0 ? $q->result_array() : array();
	}

	function logistik_get_list($where = null)
	{
		$this->db->join('resi', 'resi.resi_id = logistik.resi_id', 'left');
		if ($where) {
			$this->db->where($where);
		}
		$q = $this->db->get('logistik');
		return $result = $q->num_rows() > 0 ? $q->result_array() : array();
	}

}