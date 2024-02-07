<?php
require_once "connection.php";

if(isset($_GET['id']) && !empty($_GET['id']))
{
    $id=strip_tags($_GET['id']);
    //Nous devons d'abord recuperer la tache pour la modification de cette derniere
    $req='SELECT * FROM `tache` WHERE `id`= :id;';
    // Nous devons envoyer la requette au niveau de notre chaine de connection
    $query= $db->prepare($req);
    // Nous devons maintenant valider la requette avec les paramettres
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    // Nous devons maintenent executer la requette
    $query->execute();
    ///Nous devons maintenant recuperer les valeurs qui sont dans la l'objet $query
    $tache=$query->fetch(PDO::FETCH_ASSOC);
    // Nous partons dans le dossier vue
    require_once "./view/vue.php";
    /// nous pouvons maintenant faire la requette qui permet de faire la modification
}
