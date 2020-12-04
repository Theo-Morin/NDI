<?php

class SurfData {
    static function saveDatas($city, $spot_id, $products, $date_entree, $date_sortie, $baigneurs, $praticants, $bateaux_peche, $bateaux_loisir, $bateaux_voile) {
        $req = MySQL::getInstance()->prepare('INSERT INTO surf_datas(city, surf_spot_id, user_id, date_entree, date_sortie, baigneurs, praticants, bateaux_peche, bateaux_loisir, bateaux_voile) VALUES(?,?,?,?,?,?,?,?,?,?)');
        $req->execute(array($city, $spot_id, $_SESSION['user_id'], $date_entree, $date_sortie, $baigneurs, $praticants, $bateaux_peche, $bateaux_loisir, $bateaux_voile));

        $req = MySQL::getInstance()->prepare('SELECT surf_datas_id FROM surf_datas ORDER BY surf_datas_id DESC LIMIT 1');
        $req->execute();
        $id = $req->Fetch()['surf_datas_id'];

        foreach($products as $product){
            $req = MySQL::getInstance()->prepare('INSERT INTO used_products_on_ride(surf_datas_id, datas_products_id) VALUES(?,?)');
            $req->execute(array($id, $product));
        }
    }

    static function getProducts() {
        $req = MySQL::getInstance()->prepare('SELECT * FROM datas_products ORDER BY libelle');
        $req->execute();

        return $req->FetchAll();
    }

    static function getDatas() {
        $req = MySQL::getInstance()->prepare('SELECT * FROM surf_datas NATURAL JOIN surf_spot ORDER BY surf_datas_id DESC');
        $req->execute();

        return $req->FetchAll();
    }

    static function getData($id) {
        $req = MySQL::getInstance()->prepare('SELECT * FROM surf_datas NATURAL JOIN surf_spot WHERE surf_datas_id = ?');
        $req->execute(array($id));

        if($req->RowCount() < 1) return false;
        else return $req->Fetch();
    }
}

class Spots {
    static function saveDatas($name, $lng, $lat) {
        $req = MySQL::getInstance()->prepare('INSERT INTO surf_spot(spot_name, lng, lat, user_id) VALUES(?,?,?,?)');
        $req->execute(array($name, $lng, $lat, $_SESSION['user_id']));
    }

    static function getLastSpot() {
        $req = MySQL::getInstance()->prepare('SELECT surf_spot_id FROM surf_spot ORDER BY id DESC LIMIT 1');
        $req->execute();
        
        return $req->Fetch()['surf_spot_id'];
    }

    static function getDatas() {
        $req = MySQL::getInstance()->prepare('SELECT surf_spot_id, spot_name, lng, lat, user_id, date_creation FROM surf_spot ORDER BY spot_name DESC');
        $req->execute();

        return $req->FetchAll();
    }

    static function getDatasByLikes() {
        $req = MySQL::getInstance()->prepare('SELECT surf_spot_id, spot_name, lng, lat, user_id, date_creation, count(*) as nbLikes FROM surf_spot NATURAL JOIN surf_spot_like GROUP BY (surf_spot_id) ORDER BY nbLikes DESC');
        $req->execute();

        return $req->FetchAll();
    }

    static function getData($id) {
        $req = MySQL::getInstance()->prepare('SELECT surf_spot_id, spot_name, lng, lat, user_id, date_creation FROM surf_spot WHERE surf_spot_id = ?');
        $req->execute(array($id));
        
        return $req->Fetch();
    }

    static function getNbSpots() {
        $req = MySQL::getInstance()->prepare('SELECT count(*) as nb FROM surf_spot ORDER BY surf_spot_id DESC');
        $req->execute();

        return $req->Fetch()['nb'];
    }
}

class SpotsLikes {
    static function getUserLikes($user_id) {
        $req = MySQL::getInstance()->prepare('SELECT count(*) as nb FROM surf_spot_like WHERE user_id = ?');
        $req->execute(array($user_id));

        return $req->Fetch()['nb'];
    }

    static function getSpotLikes($spot_id) {
        $req = MySQL::getInstance()->prepare('SELECT count(*) as nb FROM surf_spot_like WHERE surf_spot_id = ?');
        $req->execute(array($spot_id));

        return $req->Fetch()['nb'];
    }
}

?>