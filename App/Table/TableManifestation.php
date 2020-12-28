<?php


namespace App\Table;


use App\Core\Database;

class TableManifestation
{
    protected $table = 'manifestation';

    public static function getManifestation($nombre, $count){
        $db = new Database('reservationTennis');
        $data = $db->query(
            "SELECT * FROM manifestation LIMIT ".$nombre.", ".$count." ",
            'App\Table\TableManifestation');
        return $data;
    }
}