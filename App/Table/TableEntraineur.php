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

    public static function versConnexion(){
        header('Location: index.php?p=conEntraineur');
    }

    public function is_connected(){
        return (isset($_SESSION['login_e']) && isset($_SESSION['mdp_e']));
    }
}