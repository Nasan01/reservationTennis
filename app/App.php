<?php
/**
 * class qui gère tous l'application
 */
use App\core;

class App
{
    public static function load(){
        session_start();
        require 'core/Autoloader.php';
        Autoloader::register();
    }

}