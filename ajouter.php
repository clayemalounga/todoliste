<?php

if (isset($_POST['envoyer'])){
    $titre=$_POST['titreTache'];
    $description=$_POST['descriptionTache'];
    $date=$_POST['dateTache'];
    $complete=$_POST['completeTache'];

    require_once "connection.php";

    // creation de la requette d'insertion
    $sql='INSERT INTO `tache`(`titre`,`description`,`date_ech`,`complete`)VALUES(:titre, :description, :date_ech, :complete);';
    // preparons la requette
    $req= $db->prepare($sql);
    /// Securisons l'envoie des variables dans la base de donnee
    $req->bindValue(':titre', $titre, PDO::PARAM_STR);
    $req->bindValue(':description',$description, PDO::PARAM_STR_CHAR);
    $req->bindValue(':date_ech', $date, PDO::PARAM_STR);
    $req->bindValue(':complete', $complete, PDO::PARAM_BOOL);
    /// Nous pouvons excecuter la requete
    if($req->execute())
    {
        header('location:index.php');
    }else{
        require_once "./Error/error.php";
    }
}
if (isset($_GET['id']) && !empty($_GET['id']) && isset($_POST['envoyermodif'])) {
    $id1=$_GET['id'];
// je peux recuperer tous les champs;
    $titre=$_POST['titreTache'];
    $description=$_POST['descriptionTache'];
    $date=$_POST['dateTache'];
    $complete=$_POST['completeTache'];
    require_once "connection.php";
    /// Nous pouvons executer une requette
    $sql=' UPDATE `tache` SET `titre`=:titre, `description`=:description, `date_ech`=:date, `complete`=:complete WHERE `id`=:id;';
    // 
    $pre=$db->prepare($sql);
    $pre->bindValue(":id", $id1, PDO::PARAM_INT);
    $pre->bindValue(":titre", $titre, PDO::PARAM_STR);
    $pre->bindValue(":description", $description, PDO::PARAM_STR_CHAR);
    $pre->bindValue(":date", $date, PDO::PARAM_STR);
    $pre->bindValue(":complete", $complete, PDO::PARAM_BOOL);
    
    $pre->execute();
    header('location:index.php');
} else {
    echo "error";
}
