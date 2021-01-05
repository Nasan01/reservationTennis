<?php


namespace App\Table;


use App\Core\Database;

class TableMateriel
{
    protected $table = 'materiel';

    public static function getAllMateriel(){
        $db = new Database('reservationTennis');
        $data = $db->query(
            "SELECT * FROM materiel",
            'App\Table\TableMateriel'
        );

        return $data;
    }

}