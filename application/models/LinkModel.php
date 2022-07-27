<?php

class LinkModel extends CI_Model
{
    public $link_id;
    public $keterangan;
    public $link;

    public function get_all_data_link()
    {
        $query = "SELECT * FROM link_checkout";
        return $this->db->query($query)->result_array();
    }

}
