<?php

$uc1 = isset($_GET['uc1']) ? htmlspecialchars($_GET['uc1']) : "home";
switch($uc1)
{
    case "home":
        $view = "home.php";
    break;
    case "informations-surf":
        $title += "Renseignez vos informations de Ride";
        $view = "form.php";
    break;
    case "user":
        require "user_controller.php";
    break;
    default:
        $title += "Page not found";
        $view = "error_docs/404.php";
    break;
}

?>