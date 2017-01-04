<?php


namespace App;


abstract class Singleton
{
    protected static $instance;

    protected function __construct()
    {
    }

    public static function instance(){
        if(null === static::$instancee){
         return static::$instance = new static;
        }

            return  static::$instance;

    }
}