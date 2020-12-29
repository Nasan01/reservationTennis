<?php


namespace App\Table;


use App\Core\Database;

class TableMembre
{
    protected $table = "membres";

    public function addMembre($nom, $prenom, $rue, $codePostal, $ville, $dateNaiss, $tel, $numFFT, $login, $mdp){
        $db = new Database('reservationTennis');
        $db->insert(
            "INSERT INTO membres(nom_membre, prenom_membre, rue_membre, codePostal_membre, ville_membre, dateNaiss_membre, tel_membre, numFFT_membre, login_membre, mdp_membre)
                      VALUES (:nom, :prenom, :rue, :codePostal, :ville, :dateNaiss, :tel, :numFFT, :login, :mdp)",
            [
                "nom"=>$nom,
                "prenom"=>$prenom,
                "rue"=>$rue,
                "codePostal"=>$codePostal,
                "ville"=>$ville,
                "dateNaiss"=>$dateNaiss,
                "tel"=>$tel,
                "numFFT"=>$numFFT,
                "login"=>$login,
                "mdp"=>$mdp
            ]
        );
    }

    public static function find($login, $mdp){
        $db = new Database('reservationTennis');
        $in = $db->prepare(
            "SELECT * FROM membres 
                      WHERE login_membre = ? AND mdp_membre = ?",
            [
                htmlspecialchars($login),
                sha1($mdp)
            ],
            'App\Table\TableMembre',
            true
        );
        return $in;
    }

    public function is_connected(){

        return (isset($_SESSION['login_m']) && isset($_SESSION['mdp_m']));
    }
}