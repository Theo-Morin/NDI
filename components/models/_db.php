<?php
/**
*	Classe d'acces aux donnees Utilise les services de la classe PDO
*	Les attributs sont tous statiques, les 4 premiers pour la connexion
*	$monMySQL qui contiendra l'unique instance de la classe
*/
class MySQL {
    private static $serveur='mysql:host=localhost';
    private static $bdd='dbname=ndi';
    private static $user='root';
    private static $mdp='';
    private static $db;
    private static $unPdo = null;

//	Constructeur privé, crée l'instance de PDO qui sera sollicitée
//	pour toutes les méthodes de la classe
    private function __construct()
    {
        MySQL::$unPdo = new PDO(MySQL::$serveur.';'.MySQL::$bdd, MySQL::$user, MySQL::$mdp);
        MySQL::$unPdo->query("SET CHARACTER SET utf8");
        MySQL::$unPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    public function __destruct()
    { 
        MySQL::$unPdo = null;
    }
/**
*	Fonction statique qui cree l'unique instance de la classe
* Appel : $instanceMySQL = MySQL::getMySQL();
*	@return l'unique objet de la classe MySQL
*/
    public static function getInstance()
    {
        if(self::$unPdo == null)
        {
            self::$db= new MySQL();
        }
        return self::$unPdo;
    }
}