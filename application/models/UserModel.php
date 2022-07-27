<?php

class UserModel extends CI_Model
{
    public $user_id;
    public $nama;
    public $jenis_kelamin;
    public $email;
    public $password;
    public $avatar;

    public function get_all_data_user()
    {
        $query = "SELECT * FROM user";
        return $this->db->query($query)->result_array();
    }

}