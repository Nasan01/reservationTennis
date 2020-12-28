<?php
/**
 * class qui gère tous l'application
 */
use App\Autoloader;
use \App\Core\Database;

class App
{
    private static $instance;
    private $titre;
    public static function load(){
        session_start();
        require ROOT . '/App/Autoloader.php';
        Autoloader::register();
    }

    public static function getInstance(){
        if(is_null(self::$instance)){
            self::$instance = new App;
        }
        return self::$instance;
    }

    public function getDataBase($dbname){
        $dataBase = new Database($dbname);
        return $dataBase;
    }
    /*------------about title-------------------*/

    public function setTitlePage($title){
        $this->titre = $title;
    }


    public function getTitlePage(){
        return $this->titre;
    }

    /*--------------end about title----------------*/

}