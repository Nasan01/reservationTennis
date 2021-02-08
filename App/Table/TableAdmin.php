<?php


namespace App\Table;


use App\Core\Database;

class TableAdmin
{
    protected $table = "admin";

    public static function findAdmin($login, $mdp){
        $db = new Database('reservationTennis');
        $in = $db->prepare(
            "SELECT * FROM admin
                      WHERE login_admin = ? AND mdp_admin = ?",
            [
                htmlspecialchars($login),
                sha1($mdp)
            ],
            'App\Table\TableAdmin',
            true
        );
        return $in;
    }

    public static function versConnexion(){
        header('Location: index.php?p=conAdmin');
    }

    public function is_connected(){
        return (isset($_SESSION['login_a']) && isset($_SESSION['mdp_a']));
    }
}