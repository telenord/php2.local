<?php

 require __DIR__ . '/autoload.php';

 $db = new \App\Db();
  //$users =\App\Model:: findById(0);
$data =  findAll();
 var_dump($data);