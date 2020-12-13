<?php
namespace App\Table;

use App\Core\Database;

class TableReservation
{
    protected $table = 'reservation';

    public static function getLastReservation(){
        $db = new Database('reservationTennis');
        $data = $db->query("SELECT * FROM reservation", 'App\Table\TableReservation');
        return $data;
    }

}