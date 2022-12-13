<?php

class MainModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set("Asia/Jakarta");
    }

    public function registration()
    {
        $insert =
            $post = $this->input->post();
        $usersInsert = [
            'full_name' => strip_tags($post['fullName']),
            'email' => strip_tags($post['email']),
            'access' => "actived",
            'created_at' => date('Y-m-d H:i:s')
        ];
        $this->db->insert('users', $usersInsert);
        $usersId = $this->db->insert_id();
        $usersIdentity = [
            'users_identity_id' => $usersId,
            'created_at' => date('Y-m-d H:i:s')
        ];
        $this->db->insert('users_identity', $usersIdentity);
        $address = [
            'users_address_id' => $usersId,
            'address_sort' => "address1",
            'created_at' => date('Y-m-d H:i:s')
        ];
        $this->db->insert('address', $address);
    }
}
