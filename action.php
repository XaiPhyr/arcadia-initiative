<?php

if ($_POST['register']) {
    $username = $_POST['username'];
    $password = hash("sha256", $_POST['password']);
    $status = $_POST['status'];
    $group = $_POST['group'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $suffix = $_POST['suffix'];
    $address = $_POST['address'];
    $zone = $_POST['zone'];
    $region = $_POST['region'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $postal_code = $_POST['postal_code'];
    $area_code = $_POST['area_code'];
    $contact_number = $_POST['contact_number'];

    echo $password;
}
