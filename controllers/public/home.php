<?php

class home_public
{
    function index()
    {
        include("views/header.php");
        include("views/public/home/index.php");
        include("views/footer.php");
    }
}

$home_public = new home_public();
