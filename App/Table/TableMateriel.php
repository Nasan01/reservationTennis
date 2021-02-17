<?php


namespace App\Table;


use App\Core\Database;

class TableMateriel
{
    protected $table = 'materiel';

    public static function getAllMateriel()
    {
        $db = new Database('reservationTennis');
        $data = $db->query(
            "SELECT * FROM materiel",
            'App\Table\TableMateriel'
        );

        return $data;
    }

    public static function getOneMateriel($id)
    {
        $db = new Database('reservationTennis');
        $data = $db->query(
            "SELECT * FROM materiel WHERE id_materiel = " . $id,
            'App\Table\TableMateriel',
            true
        );

        return $data;
    }

    public function addMateriel($type, $quantite)
    {
        $db = new Database('reservationTennis');
        $db->insert(
            "INSERT INTO materiel(type_materiel, quantite_materiel)
                      VALUES (:type, :quantite)",
            [
                'type' => $type,
                'quantite' => intval($quantite)
            ]
        );
    }

    public function modifMateriel($type, $quantite, $id)
    {
        $db = new Database('reservationTennis');
        $db->insert(
            "UPDATE materiel SET
                            type_materiel = :type,
                            quantite_materiel = :quantite
                      WHERE id_materiel = :id",
            [
                'type' => $type,
                'quantite' => intval($quantite),
                'id' => $id
            ]
        );
    }

    public function deleteMateriel($id)
    {
        $db = new Database('reservationTennis');
        $db->insert(
            "DELETE FROM materiel 
                      WHERE id_materiel = :id",
            [
                'id' => $id
            ]
        );
    }

    public function updateQuantite($quantite, $id)
    {
        $db = new Database('reservationTennis');
        $db->insert(
            "UPDATE materiel SET quantiteReserver = ?
              WHERE type_materiel = ?",
            [
                $quantite, $id
            ]
        );
    }

    public function getOneByType($type)
    {
        $db = new Database('reservationTennis');
        $data = $db->query(
            "SELECT * FROM materiel WHERE type_materiel = " . $type,
            'App\Table\TableMateriel',
            true
        );

        return $data;
    }
}
