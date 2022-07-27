<?php

class TagihanModel extends CI_Model
{

    public function get_all_data_tagihan(array $where = NULL, array $like = NULL)
    {
        if ($where) $this->db->where($where);
        if ($like) $this->db->like($like);
        return $this->db
        	->select('tg.*, l.*, r.*, t.*, f.*, lk.*, p.nama_paket, pg.nama_pengiriman, tg.created_at as tanggal_tagihan')
	        ->from('tagihan tg')
	        ->join('logistik l', 'l.log_id = tg.log_id')
	        ->join('resi r', 'r.resi_id = l.resi_id')
	        ->join('tarif t', 't.tarif_id = tg.tarif_id')
	        ->join('fee_warehouse f', 'f.fee_id = tg.fee_id')
	        ->join('link_checkout lk', 'lk.link_id = tg.link_id')
	        ->join('jenis_paket p', 'p.paket_id = r.paket_id')
	        ->join('jenis_pengiriman pg', 'pg.pengiriman_id = r.pengiriman_id')
            ->order_by('tg.created_at','ASC')
	        ->get()
	        ->result_array();
        
       /* $query = "SELECT tg.*, l.*, r.*, t.*, f.*, lk.*, p.nama_paket, pg.nama_pengiriman
        FROM 
        tagihan tg, logistik l, resi r, tarif t, fee_warehouse f, link_checkout lk, jenis_paket p,
        jenis_pengiriman pg
        WHERE tg.log_id = l.log_id AND l.resi_id = r.resi_id
        AND r.paket_id = p.paket_id AND r.pengiriman_id = pg.pengiriman_id
        AND tg.tarif_id = t.tarif_id AND tg.fee_id = f.fee_id AND tg.link_id = lk.link_id";
        return $this->db->query($query)->result_array();*/
    }
}