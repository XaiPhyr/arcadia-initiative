<?php

switch ($_GET['page']) {
    default:
        include("controllers/public/home.php");
        $home_public->index();
        break;
}
