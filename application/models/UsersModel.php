<?php

class UsersModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set("Asia/Jakarta");
    }

    public function get()
    {
        # code...
    }

    public function getAll()
    {
        $this->db->select('email,full_name,access,phone_number,date_of_birth,gender,provinces_id,districts_id,regencies_id,villages_id,street,building,home_number,address');
        $this->db->join('users_identity', 'users_identity_id=users.id', 'left');
        $this->db->join('address', 'address.users_address_id=users.id', 'left');
        $result = $this->db->get('users');
        return $result;
    }

    public function getWhereById()
    {
        # code...
    }

    public function getJoinWhereById()
    {
        # code...
    }

    public function getSession()
    {
        $this->db->select('email,full_name,access,phone_number,date_of_birth,gender,provinces_id,districts_id,regencies_id,villages_id,street,building,home_number,address');
        $this->db->join('users_identity', 'users_identity_id=users.id', 'left');
        $this->db->join('address', 'address.users_address_id=users.id', 'left');
        $result = $this->db->get_where('users', ['id' => $this->session->userdata('id')]);
        return $result;
    }

    public function storeUsers()
    {
        # code...
    }

    public function storeUpdated()
    {
        # code...
    }

    public function storeDestroy()
    {
        # code...
    }
}
