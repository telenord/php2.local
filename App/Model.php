<?php


namespace App;


abstract class Model
{
    const TABLE='';
    public static function findAll(){
        $db = new Db();
        return $db->query('SELECT * FROM'. static::TABLE, static::$class);
    }

    public static function findById(int $id){
        $db = new Db();
        return echo ('ID =' . $id); //$db->query('SELECT $id FROM'. static::TABLE, static::class);
    }
}