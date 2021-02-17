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

    public static function getAboutMembre($id){
        $db = new Database('reservationTennis');
        $in = $db->prepare(
            "SELECT * FROM membres 
                      WHERE id_membre = ?",
            [$id],
            'App\Table\TableMembre',
            true
        );
        return $in;
    }

    public function modifierAbout($nom, $prenom, $rue, $codePostal, $ville, $dateNaiss, $tel, $numFFT, $login, $mdp, $id){
        $db = new Database('reservationTennis');
        $db->insert(
            "UPDATE membres 
                      SET nom_membre = :nom, 
                          prenom_membre = :prenom,
                          rue_membre = :rue,
                          codePostal_membre = :codePostal,
                          ville_membre = :ville,
                          dateNaiss_membre = :dateNaiss,
                          tel_membre = :tel,
                          numFFT_membre = :numFFT,
                          login_membre = :login,
                          mdp_membre = :mdp
                      WHERE id_membre = :id",
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
                "mdp"=>$mdp,
                "id"=>$id
            ]
        );
    }

    public static function getAllMembre(){
        $db = new Database('reservationTennis');
        $data = $db->query(
            "SELECT * FROM membres",
            'App\Table\TableMembre'
        );
        return $data;
    }

    public function deleteMembre($id){
        $db = new Database('reservationTennis');
        $db->insert(
            "DELETE FROM membres WHERE id_membre = :id",
            [
                "id"=>$id
            ]
        );
    }

    public function is_connected(){

        return (isset($_SESSION['login_m']) && isset($_SESSION['mdp_m']));
    }
}