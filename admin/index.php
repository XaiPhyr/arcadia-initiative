<?php

switch ($_GET['page']) {
    default:
        include("controllers/admin/home.php");
        $home_admin->index();
        break;

    case 'login':
        include("controllers/admin/home.php");
        $home_admin->login();
        break;
}
