<?php

class TagihanModel extends CI_Model
{

    public function get_all_data_tagihan()
    {
        $query = "SELECT tg.*, l.*, r.*, t.*, f.*, lk.*, p.nama_paket, pg.nama_pengiriman FROM 
        tagihan tg, logistik l, resi r, tarif t, fee_warehouse f, link_checkout lk, jenis_paket p,
        jenis_pengiriman pg WHERE tg.log_id = l.log_id AND l.resi_id = r.resi_id
        AND r.paket_id = p.paket_id AND r.pengiriman_id = pg.pengiriman_id
        AND tg.tarif_id = t.tarif_id AND tg.fee_id = f.fee_id AND tg.link_id = lk.link_id";
        return $this->db->query($query)->result_array();

        
    }
}