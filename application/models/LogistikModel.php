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

    public function get_all_data_logistik(array $where = NULL)
    {
    	if ($where) $this->db->where($where);
    	return $this->db
    		->select('l.*, r.*, p.nama_paket, pg.nama_pengiriman')
    		->from('logistik l')
    		->join('resi r', 'r.resi_id = l.resi_id')
    		->join('jenis_paket p', 'p.paket_id = r.paket_id')
    		->join('jenis_pengiriman pg', 'pg.pengiriman_id = r.pengiriman_id')
    		->get()
    		->result_array();
        /*$query = "SELECT l.*, r.*, p.nama_paket, pg.nama_pengiriman FROM logistik l, resi r, jenis_paket p, jenis_pengiriman pg 
        WHERE l.resi_id = r.resi_id AND r.paket_id = p.paket_id AND r.pengiriman_id = pg.pengiriman_id";
        return $this->db->query($query)->result_array();*/
    }

    function logistik_list($where = null)
	{
		if ($where) $this->db->where($where);
		return $this->db
			->select('l.*, r.*, pg.nama_pengiriman, p.nama_paket')
			->from('logistik l')
			->join('resi r', 'r.resi_id = l.resi_id', 'left')
			->join('jenis_pengiriman pg', 'pg.pengiriman_id = r.pengiriman_id', 'left')
			->join('jenis_paket p', 'p.paket_id = r.paket_id', 'left')
			->where('r.user_id', $this->session->userdata()['user_id'])
			// ->group_by('box') // yakin ini group by 'box'?
			->order_by('r.created_at', 'desc')
			->get()
			->result_array();
		/*$this->db->where($where);
		$this->db->group_by('box');
		$this->db->order_by('created_at', 'desc');
		$q = $this->db->get('logistik');
		return $result = $q->num_rows() > 0 ? $q->result_array() : array();*/
	}

}