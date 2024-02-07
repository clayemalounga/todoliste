<?php
require_once './config/constante.php';
// commencons par nous connecter a la base de donnee
try {
    $db= new PDO('mysql:host=localhost;dbname=mytodoliste',USER,PASSWORD);
    $db->exec("SET NAMES UTF8");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo"connection reussite";
} catch (Exception $e){
    echo "Error".$e->getMessage()." a la ligne ".$e->getLine()."Dans le fichier ".$e->getFile();
}
