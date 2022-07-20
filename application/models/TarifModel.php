<?php

class TarifModel extends CI_Model
{
    public $tarif_id;
    public $tarif_ems_tax_paper;
    public $tarif_ems_tax_volume;
    public $tarif_ac_tax_paper;
    public $tarif_ac_tax_volume;

    public function get_all_data_tarif()
    {
        $query = "SELECT * FROM tarif";
        return $this->db->query($query)->result_array();
    }

}
