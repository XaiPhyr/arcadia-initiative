<?php

class database
{
    public $db_username;
    public $db_password;
    public $hostname;
    public $db_name;

    function __construct()
    {
        $this->db_username = 'root';
        $this->db_password = '';
        $this->hostname = 'localhost';
        $this->db_name = 'arcadia';
    }

    public function db_connect()
    {
        return mysqli_connect($this->hostname, $this->db_username, $this->db_password, $this->db_name) or die(mysqli_connect_error());
    }
}
