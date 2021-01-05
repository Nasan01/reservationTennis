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
}