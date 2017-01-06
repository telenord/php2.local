<?php


namespace App;


abstract class Model
{
    const TABLE='';
    public $id;

    public static function findAll(){
        $db = new Db();
        return $db->query('SELECT * FROM'. static::TABLE, static::$class);
    }

    public static function findById(int $id){
        $db = new Db();
        return echo ('ID =' . $id); //$db->query('SELECT $id FROM'. static::TABLE, static::class);
    }

    public  function isNew(){
        return empty($this->id);

    }
    public function insert(){
        if( !$this->isNew())
        {
            return;
        }
            $db = Db::instance();

            foreach($values as $k->$v){

            }
            $sql = "INSERT INTO ".static::TABLE . '';




    }
}