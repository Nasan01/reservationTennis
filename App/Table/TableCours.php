<?php


namespace App\Table;


use App\Core\Database;

class TableCours
{

    public static function getCours($debut, $fin){
        $db = new Database('reservationTennis');
        $data = $db->query(
            "SELECT * FROM cours LIMIT ".$debut.", ".$fin,
            "App\Table\TableCours"
        );
        return $data;
    }

    public static function countCours(){
        $db = new Database('reservationTennis');
        $data = $db->query("
        SELECT count(*) FROM cours",
            'App\Table\TableCours'
        );
        $data = (int) $data;
        return $data;
    }

}