<?php
require_once "connection.php";

if (isset($_GET['id'])) {
    //Nous devons recupere l'id
    $id=strip_tags($_GET['id']);
    // Nous pouvons effectuer la requette qui permet de faire la suppression
    $req='DELETE FROM `tache` WHERE `id`= :id;';
    //Nous pouvons effectuer la requette preparee
    $res= $db->prepare($req);
    // Nous pouvons remplacer la valeur de la requette preparee
    $res->bindValue(":id", $id, PDO::PARAM_INT);
    // Nous pouvons maintenant executer la requette;
    if($res->execute())
    {
        header('location:index.php');
    }else{
        require_once "./Error/error.php";
    }
}else{
    //echo"error";
    require_once "./Error/error.php";
}
