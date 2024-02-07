<?php
$titre="Inscription";
$description="Une breve description de la page d'insertion de la tache";
require_once './Include/header.php';
?>
<main class="container my-5">
    <form action="ajouter.php?id=<?= $tache['id'];?>" method="POST" class="form-horizontal col-md-4 m-auto border border-dark p-4 rounded">
        <h1 class="text-center fs-4 bg-primary text-light mb-4 ">Inscriver une tache</h1>
        <div class="form-floating mb-3">
            <input type="text" value="<?= $tache['titre'];?>" id="unevaleur" class="form-control" placeholder="Le titre" required name="titreTache">
            <label for="unevaleur">Entrer le titre de tache</label>
        </div>
        <div class="form-floating mb-3">
            <textarea name="descriptionTache" id="unevaleure" cols="30" rows="60" placeholder="la description" class="form-control"><?php if(isset($tache['description']) && !empty($tache['description'])) echo $tache['description'] ;?></textarea>
            <label for="unevaleure">Description de la tache</label>
        </div>
        <div class="form-floating mb-3">
            <input type="date" value="<?= $tache['date_ech'] ;?>" id="unevaleures" class="form-control input-sm" placeholder="La date" required name="dateTache" class="form-control">
            <label for="unevaleures">Date de la tache</label>
        </div>
        <div class="form-group mb-3">
        <label for="">Selectionner si la tache est complete</label>
        <br>
        <br>
        <input value="<?php if(isset($tache['complete']) and $tache['complete']==1) echo" checked"; ?>" type="radio" name="completeTache" id="unevaleurese" value="true">
        <label for="unevaleurese">Tache complete</label>
        &NonBreakingSpace;
        <input value="<?php if(isset($tache['complete']) and $tache['complete']==0) echo" checked"; ?>" type="radio" name="completeTache" id="unevaleureses" value="false">
        <label for="unevaleureses">Tache imcomplete</label>
        </div>
        <div class="form-group">
            <button type="submit" name="envoyermodif" class="btn btn-primary">Envoyer</button>
        </div>
    </form>
</main>