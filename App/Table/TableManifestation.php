<?php


namespace App\Table;


use App\Core\Database;

class TableManifestation
{
    protected $table = 'manifestation';

    public static function getManifestation($nombre, $count){
        $db = new Database('reservationTennis');
        $data = $db->query(
            "SELECT * FROM manifestation LIMIT ".$nombre.", ".$count." ",
            'App\Table\TableManifestation');
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
}