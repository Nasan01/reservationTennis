<?php

namespace App\Table;

use App\Core\Database;

class TableMaterielReservation{
    private $table = "materielReservation";

    public function getReservationByUser($id_user){
        $db = new Database('reservationTennis');

        $data = $db->prepare("
         SELECT * FROM materielReservation WHERE quiLeReserve = ?
         ", [$id_user], 
        "App\Table\TableMaterielReservation"
        );

        return $data;
    }
}