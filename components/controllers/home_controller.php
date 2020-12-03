<?php

$uc1 = isset($_GET['uc1']) ? htmlspecialchars($_GET['uc1']) : "home";
switch($uc1)
{
    case "home":
        $view = "home.php";
    break;
    case "client":
        require 'client_controller.php';
    break;
    case "agence":
        require 'agence_controller.php';
    break;
    case "admin":
        require 'admin_controller.php';
    break;
    default:
        $title += "Page not found";
        $view = "error_docs/404.php";
    break;
}

?>