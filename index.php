<?php
session_start();

require_once './components/models/_db.php';
require_once './components/models/Other.php';
require_once './components/models/MeteoAPI.php';
require_once './components/models/User.php';
require_once './components/models/SurfData.php';

define('SERVER_URL', "localhost");

$title = "NDI | ";
$view = 'error_docs/404.php';

require_once './components/controllers/home_controller.php';

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
include('./components/views/partials/footer.php');

?>
