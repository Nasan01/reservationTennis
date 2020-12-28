<?php
namespace App\Table;

use App\Core\Database;

class TableReservation
{
    protected $table = 'reservation';

    public static function getLastReservation(){
        $db = new Database('reservationTennis');
        $data = $db->query(
            "SELECT * FROM reservation",
            'App\Table\TableReservation'
        );
        return $data;
    }

    public static function getWithLink($debut, $fin){
        $db = new Database('reservationTennis');
        $data = $db->query(
            "SELECT r.date_reservation reservationDate, d.plage_horaire horairePlage
                      FROM reservation r 
                      LEFT JOIN date_heure d
                      ON r.heure_reservation = d.id_dateHeure
                      LIMIT ".$debut.", ".$fin,
        'App\Table\TableReservation'
        );
        return $data;
    }

    public static function getTest($debut, $fin){
        $db = new Database('reservationTennis');
        $data = $db->query(
            "SELECT * FROM test LIMIT ".$debut.", ".$fin,
            "App\Table\TableReservation"
        );
        return $data;
    }

}