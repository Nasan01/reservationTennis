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
    public function ajoutCourt($date, $h8_10, $h10_12, $h12_14, $h14_16, $h16_18, $h18_20){
        $db = new Database('reservationTennis');
        $db->insert(
            "INSERT INTO test(date, nbr_8_10, nbr_10_12, nbr_12_14, nbr_14_16, nbr_16_18, nbr_18_20)
                      VALUES (:date, :h8_10, :h10_12, :h12_14, :h14_16, :h16_18, :h18_20)",
            [
                "date"=>$date,
                "h8_10"=>$h8_10,
                "h10_12"=>$h10_12,
                "h12_14"=>$h12_14,
                "h14_16"=>$h14_16,
                "h16_18"=>$h16_18,
                "h18_20"=>$h18_20
            ]
        );
    }

}