<?php
namespace App\Core;

use \PDO;

class Database{

    public function __construct($dbname, $host = 'localhost', $user = 'root', $pass = '')
    {
        $this->m_dbname = $dbname;
        $this->m_host = $host;
        $this->m_user = $user;
        $this->m_pass = $pass;

    }

    public function getDb(){
        if($this->m_db === null){
            $bdd = new PDO(
                "mysql:host=" . $this->m_host .";dbname=". $this->m_dbname.";",
                $this->m_user,
                $this->m_pass
            );
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->m_db = $bdd;
        }

        return $this->m_db;
    }

    public function query($statement, $class_name = null, $one = false){
        $req = $this->getDb()->query($statement);
        $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
        if($one){
            $datas = $req->fetch();
        }else{
            $datas = $req->fetchAll();
        }

        return $datas;
    }

    public function prepare($statement, $attribute, $class_name = null, $one = false){
        $req = $this->getDb()->prepare($statement);
        $req->execute($attribute);
        if(is_null($class_name)){
            $req->setFetchMode(PDO::FETCH_OBJ);
        }else{
            
            $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
        }

        if($one){
            $datas = $req->fetch();
        }else{
            $datas = $req->fetchAll();
        }

        return $datas;
    }
    public function insert($statement, $attribute, $class_name = null, $one = false){
        $req = $this->getDb()->prepare($statement);
        $req->execute($attribute);
        if(is_null($class_name)){
            $req->setFetchMode(PDO::FETCH_OBJ);
        }else{
            
            $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
        }
    }

    private $m_dbname;
    private $m_host;
    private $m_user;
    private $m_pass;
    private $m_db;

}
