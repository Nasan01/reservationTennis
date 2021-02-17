<?php


namespace App\Table;


use App\Core\Database;

class TableCours
{

    protected $table = 'cours';

    public static function getCours($debut, $fin){
        $db = new Database('reservationTennis');
        $data = $db->query(
            "SELECT * FROM cours LIMIT ".$debut.", ".$fin,
            "App\Table\TableCours"
        );
        return $data;
    }

    public static function countCours(){
        $db = new Database('reservationTennis');
        $data = $db->query("
        SELECT count(*) FROM cours",
            'App\Table\TableCours'
        );
        $data = (int) $data;
        return $data;
    }

    public function addCours($nomC8_10, $nomC10_12, $nomC12_14, $nomC14_16, $nomC16_18, $nomC18_20, $date){
        $db = new Database('reservationTennis');
        $data = $db->insert(
            "INSERT INTO cours(nomCours_8_10, nomCours_10_12, nomCours_12_14, nomCours_14_16, nomCours_16_18, nomCours_18_20, date_cours)
                      VALUES (:nomC8_10, :nomC10_12, :nomC12_14, :nomC14_16, :nomC16_18, :nomC18_20, :date_c)",
            [
                "nomC8_10"=>$nomC8_10,
                "nomC10_12"=>$nomC10_12,
                "nomC12_14"=>$nomC12_14,
                "nomC14_16"=>$nomC14_16,
                "nomC16_18"=>$nomC16_18,
                "nomC18_20"=>$nomC18_20,
                "date_c"=>$date
            ]
        );
    }

    public static function getCoursById($id){
        $db = new Database('reservationTennis');
        $data = $db->query(
            "SELECT * FROM cours WHERE id_cours = ". $id,
            "App\Table\TableCours",
            true
        );
        return $data;
    }

    public function modifCours($nomC8_10, $nomC10_12, $nomC12_14, $nomC14_16, $nomC16_18, $nomC18_20, $date, $id){
        $db = new Database('reservationTennis');
        $db->insert(
            "
            UPDATE cours 
            SET 
                nomCours_8_10 = :nomC8_10,
                nomCours_10_12 = :nomC10_12,
                nomCours_12_14 = :nomC12_14,
                nomCours_14_16 = :nomC14_16,
                nomCours_16_18 = :nomC16_18,
                nomCours_18_20 = :nomC18_20,
                date_cours = :date_c
            WHERE id_cours = :id",
            [

                "nomC8_10"=>$nomC8_10,
                "nomC10_12"=>$nomC10_12,
                "nomC12_14"=>$nomC12_14,
                "nomC14_16"=>$nomC14_16,
                "nomC16_18"=>$nomC16_18,
                "nomC18_20"=>$nomC18_20,
                "date_c"=>$date,
                "id"=>$id
            ]
        );
    }

}