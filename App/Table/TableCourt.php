<?php


namespace App\Table;


use App\Core\Database;

class TableCourt
{
    protected $table = 'court';

    public static function getAllCourt(){
        $db = new Database('reservationTennis');
        $data = $db->query(
            "SELECT * FROM court",
            'App\Table\TableCourt'
        );

        return $data;
    }
}