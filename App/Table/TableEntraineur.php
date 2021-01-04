<?php


namespace App\Table;


use App\Core\Database;

class TableEntraineur
{
    protected $table = 'entraineurs';

    public static function findEntraineur($login, $mdp){
        $db = new Database('reservationTennis');
        $in = $db->prepare(
            "SELECT * FROM entraineurs
                      WHERE login_entraineur = ? AND mdp_entraineur = ?",
            [
                htmlspecialchars($login),
                sha1($mdp)
            ],
            'App\Table\TableEntraineur',
            true
        );
        return $in;
    }

    public static function getoneEntraineur($id){
        $db = new Database('reservationTennis');
        $in = $db->prepare(
            "SELECT * FROM entraineurs
                      WHERE id_entraineur = :id_entraineur",
            [
                "id_entraineur"=>$id
            ],
            'App\Table\TableEntraineur',
            true
        );
        return $in;
    }

    public static function getAllwithLimit($debut){
        $db = new Database('reservationTennis');
        $data = $db->query(
            "SELECT * FROM entraineurs LIMIT " . $debut .", 10",
            'App\Table\TableEntraineur'
        );
        return $data;
    }

    public function creerEntraineur($nom, $prenom, $login, $mdp){
        $db = new Database('reservationTennis');
        $db->insert("
            INSERT INTO entraineurs (nom_entraineur, prenom_entraineur, login_entraineur, mdp_entraineur)
            VALUES (:nom, :prenom, :login, :mdp)
        ",
            [
                'nom'=>$nom,
                'prenom'=>$prenom,
                'login'=>$login,
                'mdp'=>$mdp
            ]
        );
    }

    public function modifierEntraineur($nom, $prenom, $login, $mdp, $id){
        $db = new Database('reservationTennis');
        $db->insert("
            UPDATE entraineurs SET
                nom_entraineur = :nom,
                prenom_entraineur = :prenom,
                login_entraineur = :login,
                mdp_entraineur = :mdp
            WHERE id_entraineur = :id 
        ",
            [
                'nom'=>$nom,
                'prenom'=>$prenom,
                'login'=>$login,
                'mdp'=>$mdp,
                'id'=>$id
            ]
        );
    }

    public function deleteEntraineur($id){
        $db = new Database('reservationTennis');
        $db->insert("
            DELETE FROM entraineurs 
            WHERE id_entraineur = :id 
        ",
            [
                'id'=>$id
            ]
        );
    }

    public static function versConnexion(){
        header('Location: index.php?p=conEntraineur');
    }

    public function is_connected(){
        return (isset($_SESSION['login_e']) && isset($_SESSION['mdp_e']));
    }
}