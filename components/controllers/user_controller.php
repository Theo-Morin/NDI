<?php

$uc1 = isset($_GET['uc1']) ? htmlspecialchars($_GET['uc1']) : "home";
switch($uc1)
{
    case "login":
        $title .= "Login / Sign-up";
        $view = "user/login.php";
    break;
    case "change-informations":
        $view = "user/form.php";
    break;
    default:
        $title .= "Page not found";
        $view = "error_docs/404.php";
    break;
}

?>