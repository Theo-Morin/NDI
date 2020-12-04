<?php

class User {
    /**
     * Connexion
     */
    static function signin($login,$passwd){
        $req = MySQL::getInstance()->prepare('SELECT user_id , email, passwd FROM user WHERE email = ?');
        $req->execute(array($login));
        $res = $req->Fetch();
        if($req->RowCount() > 0) {
            if(password_verify($passwd, $res['passwd'])){
                $_SESSION['user_id'] = $res['user_id'];
                return true;
            }
            return false;
            
        }else{
            return false;
        }
    }

    /**
     * Déconnecte l'utilisateur
     */
    static function signout(){
        session_destroy();
    }

    /**
     * Inscription
     */
    static function signup($email,$fullname,$passwd){ 
        $pwd = password_hash($passwd,PASSWORD_DEFAULT);
        $req = MySQL::getInstance()->prepare('SELECT email FROM user WHERE email= ?');
        $req->execute(array($email));
        if($req->RowCount() == 0){
            $insert = MySQL::getInstance()->prepare('INSERT INTO user(email,fullname, passwd) VALUES(?, ? , ?)');
            $insert->execute(array($email,$fullname,$pwd));
            Other::sendmail($email,"Confirmation de l'inscription");
        }
        else{
            return false;
        }
    }

    static function changePasswd($newpasswd) {
        $pwd = password_hash($newpasswd,PASSWORD_DEFAULT);
        $req = MySQL::getInstance()->prepare('UPDATE user SET passwd = ? WHERE user_id = ?');
        $req->execute(array($pwd, $_SESSION['user_id']));
    }

    /**
     * Récupère les infos d'un utilisateur
     */
    static function get_user($user_id){
        $req = MySQL::getInstance()->prepare('SELECT email , fullname, date_creation FROM user WHERE id = ?');
        $req->execute(array($user_id));
        return $req->Fetch();
    }

    /**
     * Récupère les informations de tous les utilisateurs
     */
    static function get_users(){
        $req = MySQL::getInstance()->prepare('SELECT * FROM user');
        $req->execute();
        return $req->FetchAll();

    }

    /**
     * Récupère le nombre d'utilisateurs
     */
    static function nb_users(){
        $req = MySQL::getInstance()->prepare('SELECT COUNT(*) AS nb FROM user');
        $req->execute();
        $res = $req->Fetch();
        return $res['nb'];
    }
    static function edit_user($email,$fullname,$passwd){
        $verif = MySQL::getInstance()->prepare('SELECT passwd FROM user WHERE user_id = ?');
        $verif->execute(array($_SESSION['user_id']));
        $res = $verif->Fetch();
        if(password_verify($passwd,$res['passwd'])){
            $req = MySQL::getInstance()->prepare('UPDATE user SET email = ?, fullname = ? WHERE user_id= ?');
            $req->execute(array($email,$fullname,$_SESSION['user_id']));
            return true;
        }
        else{
            return false;
        }
        
    }


    /**
     * Vérifie si l'utilisateur est connecté
     */
    static function isLogged() {
        if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) return $_SESSION['user_id'];
        else return false;
    }
}

?>