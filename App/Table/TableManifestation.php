<?php


namespace App\Table;


use App\Core\Database;

class TableManifestation
{
    protected $table = 'manifestation';

    public static function getManifestation($nombre, $count, $type){
        $db = new Database('reservationTennis');
        $data = $db->query(
            "SELECT * FROM manifestation WHERE type_manifestation = '". $type ."' LIMIT ".$nombre.", ".$count." ",
            'App\Table\TableManifestation');
        return $data;
    }

    public static function getCountManifestation(){
        $db = new Database('reservationTennis');
        $data = $db->query(
            "SELECT count(*) FROM manifestation",
            'App\Table\TableManifestation');
        $data = (int) $data;
        return $data;
    }

    public function addManifestation($titre, $type, $horaire, $organisateur, $tranche, $niveau, $effectif, $animateur, $court, $materiel){
        $db = new Database('reservationTennis');
        $db->insert("
            INSERT INTO manifestation(
                    titre_manifestation,
                    type_manifestation,
                    horaire_manifestation,
                    organisateur_manifestation,
                    tranche_age_manifestation,
                    niveau_req_manifestation,
                    effectif_manifestation,
                    animateur_manifestation,
                    court_manifestation,
                    materiel_manifestation                  
            ) VALUES (
                      :titre,
                      :type,
                      :horaire,
                      :organisateur,
                      :tranche,
                      :niveau,
                      :effectif,
                      :animateur,
                      :court,
                      :materiel
            )
        ",
        [
            "titre"=>$titre,
            "type"=>$type,
            "horaire"=>$horaire,
            "organisateur"=>$organisateur,
            "tranche"=>$tranche,
            "niveau"=>$niveau,
            "effectif"=>$effectif,
            "animateur"=>$animateur,
            "court"=>$court,
            "materiel"=>$materiel
        ]);
    }

    public static function addInscrit($id_manifestation, $count){
        $db = new Database('reservationTennis');
        $count ++;
        $db->insert(
            "UPDATE manifestation 
                      SET 
                        nbre_inscrit = :nbre_inscrit
                      WHERE 
                        id_manifestation = :id_manifestation
            ",
        [
            "nbre_inscrit"=>$count,
            "id_manifestation"=>$id_manifestation
        ]
        );
    }

    public static function getOne($id){
        $db = new Database('reservationTennis');
        $data = $db->query(
            "SELECT * FROM manifestation WHERE id_manifestation = " . $id,
            'App\Table\TableManifestation', true);
        return $data;
    }

    public static function getAllManif(){
        $db = new Database('reservationTennis');
        $data = $db->query(
            "SELECT * FROM manifestation",
            'App\Table\TableManifestation');
        return $data;
    }

    public function deleteManifestation($id){
        $db = new Database('reservationTennis');
        $db->insert(
            "DELETE FROM manifestation WHERE id_manifestation = ?",
            [
                $id
            ]
        );
    }
}