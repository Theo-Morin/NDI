<?php

$uc1 = isset($_GET['uc1']) ? htmlspecialchars($_GET['uc1']) : "home";
switch($uc1)
{
    case "home":
        $view = "home.php";
        $title .= "Home";
        $nbSpots = Spots::getNbSpots();
        $nbUsers = User::nb_users();

        if(isset($_POST['city'])) {
            $city = htmlspecialchars($_POST['city']);
            $_SESSION['city'] = $city;
        }
        if(isset($_SESSION['city'])) {
            $weather = MeteoAPI::getCurrentWeather($_SESSION['city']);
            if($weather['location'] == NULL) {
                $_SESSION['city'] = "Bordeaux";
                $weather = MeteoAPI::getCurrentWeather($_SESSION['city']);
            }
        } else $weather = MeteoAPI::getCurrentWeather("Bordeaux");
    break;
    case "spots":
        $title .= "Spots";
        $view = "spots.php";
        $spots = Spots::getDatasByLikes();
    break;
    case "informations-surf":
        $view = "Remplir le formulaire";
        if(!isset($_SESSION['user_id'])) exit(header('Location: /user/login'));
        $title += "Renseignez vos informations de Ride";
        $view = "form.php";
        $spots = Spots::getDatas();
        /**
         * City, Spot, Products,
         * 
         * date_entree, date_sortie
         */
        if(isset($_POST['city'], $_POST['date_entree'], $_POST['date_sortie'])) {
            $city = htmlspecialchars($_POST['city']);
            $products = htmlspecialchars($_POST['products']);
            $date_entree = htmlspecialchars($_POST['date_entree']);
            $date_sortie = htmlspecialchars($_POST['date_sortie']);
            if(isset($_POST['spot_id'])) {
                $spot_id = htmlspecialchars($_POST['spot_id']);
            }
            else {
                if(!empty($_POST['spot']['name']) && !empty($_POST['spot']['lng']) && !empty($_POST['spot']['lat'])) {
                    $name = htmlspecialchars($_POST['spot']['name']);
                    $lng = htmlspecialchars($_POST['spot']['lng']);
                    $lat = htmlspecialchars($_POST['spot']['lat']);
                    Spots::saveDatas($name, $lng, $lat);
                    $spot_id = Spots::getLastSpot();
                }
                else {
                    $_SESSION['error'] = "Veuillez entrer toutes les données nécessaires à la création d'un nouveau spot";
                }
            }
            if(!empty($city) && !empty($spot_id) && !empty($date_entree) && !empty($date_sortie)) {
                SurfData::saveDatas($city, $spot_id, $products, $date_entree, $date_sortie);
            }
            else {
                $_SESSION['error'] = "Veuillez remplir tous les champs";
            }
        }
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