<?php

require_once './components/models/_db.php';
require_once './components/models/Contact.php';
require_once './components/models/Galerie.php';
require_once './components/models/Partenaire.php';
require_once './components/models/Prestation.php';
require_once './components/controllers/home_controller.php';

define('SERVER_URL', "http://simultaux.fr/");

$title = "NDI | ";
$view = 'error_docs/404.php';
$stylesheet = [];
$stylesheet[] = "/public/vendors/bootstrap/bootstrap.css";
$stylesheet[] = "/public/assets/css/style.css";
$scripts = [];
$scripts[] = "/public/vendors/jquery.js";
$scripts[] = "/public/vendors/bootstrap/bootstrap.js";
$scripts[] = "/public/assets/js/site.js";

include('./components/views/partials/head.php');
include('./components/views/partials/nav.php');
include('./components/views/' . $view);
include('./components/views/partials/head.php');


?>