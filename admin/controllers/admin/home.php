<?php

class home_admin
{
    function index()
    {
        include("views/header.php");
        include("views/admin/home/index.php");
        include("views/footer.php");
    }

    function login()
    {
        include("views/header.php");
        include("views/login.php");
        include("views/footer.php");
    }
}

$home_admin = new home_admin();
