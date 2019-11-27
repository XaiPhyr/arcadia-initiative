<?php

if ($_POST['login']) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo $username . " - " . hash("sha256", $password);
}
