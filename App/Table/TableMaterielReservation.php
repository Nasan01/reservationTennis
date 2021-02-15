<?php

namespace App\Table;

use App\Core\Database;

class TableMaterielReservation
{
    private $table = "materielReservation";

    public static function getReservationByUser($id_user)
    {
        $db = new Database('reservationTennis');

        $data = $db->prepare(
            "
         SELECT * FROM materielReservation WHERE quiLeReserve = ?
         ",
            [$id_user],
            "App\Table\TableMaterielReservation"
        );

        return $data;
    }

    public static function getReservationByEntraineur($id_entraineur)
    {
        $db = new Database('reservationTennis');

        $data = $db->prepare(
            "
         SELECT * FROM materielReservation WHERE quiLeReserveE = ?
         ",
            [$id_entraineur],
            "App\Table\TableMaterielReservation"
        );

        return $data;
    }

    public function addResevation($quiLeReserve, $quiLeReserveE, $materielReserver, $qtAReserver, $enReservation)
    {
        $db = new Database('reservationTennis');

        $db->insert(
            " INSERT INTO materielReservation(quiLeReserve, quiLeReserveE, materielReserver, quantiteReserver, enReservation)
                VALUES(:quiLeReserve, :quiLeReserveE, :materielReserver, :quantiteReserver, :enReservation)",
            [
                "quiLeReserve" => intval($quiLeReserve),
                "quiLeReserveE" => intval($quiLeReserveE),
                "materielReserver" => $materielReserver,
                "quantiteReserver" => intval($qtAReserver),
                "enReservation" => intval($enReservation)
            ]
        );
    }

    public function rendreReservation($up, $id)
    {
        $db = new Database('reservationTennis');

        $db->insert(
            "UPDATE materielReservation SET enReservation = ? WHERE id_matReservation = ?",
            [$up, $id]
        );
    }
}
