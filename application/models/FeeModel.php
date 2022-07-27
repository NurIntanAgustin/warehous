<?php

class FeeModel extends CI_Model
{
    public $fee_id;
    public $keterangan;
    public $fee;

    public function get_all_data_fee()
    {
        $query = "SELECT * FROM fee_warehouse";
        return $this->db->query($query)->result_array();
    }

}
