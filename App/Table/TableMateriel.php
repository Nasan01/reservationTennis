<?php


namespace App\Table;


use App\Core\Database;

class TableMateriel
{
    protected $table = 'materiel';

    public static function getAllMateriel(){
        $db = new Database('reservationTennis');
        $data = $db->query(
            "SELECT * FROM materiel",
            'App\Table\TableMateriel'
        );

        return $data;
    }

    public function addMateriel($type, $quantite){
        $db = new Database('reservationTennis');
        $db->insert(
            "INSERT INTO materiel(type_materiel, quantite_materiel)
                      VALUES (:type, :quantite)",
            [
                'type'=>$type,
                'quantite'=>intval($quantite)
            ]
        );
    }

}