<?php


namespace App\Table;


use App\Core\Database;

class TableDateHeure
{
    protected $table = 'date_heure';

    public static function getTime(){
        $db = new Database('reservationTennis');
        $data = $db->query(
            "SELECT * FROM date_heure",
            'App\Table\TableDateHeure'
        );
        return $data;
    }

    public static function getAll(){
        $db = new Database('reservationTennis');
        $data = $db->query(
            '
            SELECT d.plage_horaire horaire, d.nbr_reservation nbrReservation, r.date_reservation dateReservation
            FROM date_heure d
            LEFT JOIN reservation r 
            ON d.truc_reserver = r.id_reservation
            ',
            'App\Table\TableDateHeure'
        );
        return $data;
    }

}