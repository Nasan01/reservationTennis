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

    public static function getOneCourt($id){
        $db = new Database('reservationTennis');
        $data = $db->query(
            "SELECT * FROM court WHERE id_court = " . $id,
            'App\Table\TableCourt',
            true
        );

        return $data;
    }

    public function addCourt($nom, $surface, $etat){
        $db = new Database('reservationTennis');
        $db->insert(
            "INSERT INTO court(nom_court, surface_court, etat_court)
                      VALUES (:nom, :surface, :etat)",
            [
                'nom'=>$nom,
                'surface'=>$surface,
                'etat'=>$etat
            ]
        );
    }

    public function modifCourt($nom, $surface, $etat, $id){
        $db = new Database('reservationTennis');
        $db->insert(
            "UPDATE court SET
                        nom_court = :nom,
                        surface_court = :surface,
                        etat_court = :etat
                      WHERE id_court = :id",
            [
                'nom'=>$nom,
                'surface'=>$surface,
                'etat'=>$etat,
                'id'=>$id
            ]
        );
    }

    public function deleteCourt($id){
        $db = new Database('reservationTennis');
        $db->insert(
            "DELETE FROM court WHERE id_court = :id",
            [
                'id'=>$id
            ]
        );
    }
}