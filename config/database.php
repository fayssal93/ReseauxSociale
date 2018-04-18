<?php

try{
    $db = new PDO ("mysql:localhost;dbname=rscode", "root", "");

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // $db->query("SELECT id FROM users");

} catch (PDOException $a){
    die('Erreur de ma base de D :'.$a->getMessage());
}

