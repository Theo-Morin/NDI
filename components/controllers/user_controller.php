<?php

$uc2 = isset($_GET['uc2']) ? htmlspecialchars($_GET['uc2']) : "home";
switch($uc2)
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