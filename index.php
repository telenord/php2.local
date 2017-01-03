<?php

 require __DIR__ . '/autoload.php';

 $db = new \App\Db();
 $res = $db->execute('CREATE TABLE news (id SERIAL)');
 var_dump($res);