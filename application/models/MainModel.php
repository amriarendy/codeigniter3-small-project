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
        return;
    }
}
