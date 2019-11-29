<?php
include("database.php");

class account extends database
{
    public $ID;
    public $username;
    public $password;
    public $status;
    public $group;
    public $first_name;
    public $last_name;
    public $suffix;
    public $address;
    public $zone;
    public $region;
    public $city;
    public $country;
    public $postal_code;
    public $area_code;
    public $contact_number;

    function save_data()
    {
        if (empty($this->ID) || $this->ID == '') {
            $sqlPostData = "INSERT INTO ";
        } else {
            $sqlPutData = "UPDATE";
        }
    }
}
