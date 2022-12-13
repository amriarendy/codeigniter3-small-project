<?php

class MainModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set("Asia/Jakarta");
    }

    public function loginCheck($email)
    {
        $users = $this->db->get_where('users', ['email' => $email]);
        return $users;
    }

    public function registration()
    {
        $post = $this->input->post();
        $usersInsert = [
            'full_name' => strip_tags($post['fullName']),
            'email' => strip_tags($post['email']),
            'password' => password_hash($post['password'], PASSWORD_DEFAULT),
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
            'sort_address' => "address1",
            'created_at' => date('Y-m-d H:i:s')
        ];
        $this->db->insert('address', $address);
    }
}
