<?php
$titre="Accueil";
$description="Une breve description de la page d'accueil";
require_once './Include/header.php';
?>
<main class="container">
    <div class="my-5">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Ajouter une tache
        </button>
<!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ajouter une tache</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="ajouter.php" method="post" class="form-horizontal">
                        <div class="form-floating mb-3">
                            <input type="text" id="unevaleur" class="form-control" placeholder="Le titre" required name="titreTache">
                            <label for="unevaleur">Entrer le titre de tache</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea name="descriptionTache" id="unevaleure" cols="30" rows="30" placeholder="la description" class="form-control"></textarea>
                            <label for="unevaleure">Description de la tache</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="date" id="unevaleures" class="form-control input-sm" placeholder="La date" required name="dateTache" class="form-control">
                            <label for="unevaleures">Date de la tache</label>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Selectionner si la tache est complete</label>
                            <br>
                            <br>
                            <input type="radio" name="completeTache" id="unevaleurese" value="1">
                            <label for="unevaleurese">Tache complete</label>
                            &NonBreakingSpace;
                            <input type="radio" name="completeTache" id="unevaleureses" value="0">
                            <label for="unevaleureses">Tache imcomplete</label>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="envoyer" class="btn btn-primary">Envoyer</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
        </div>
    </div>
    <section class="shadow-lg rounded ">
        <div class="bg-info px-2">
            <h1 class="">Liste des taches </h1>
        </div>
        <div class="p-2">
            <div class="text-center">
                <?php
                    require_once "read.php";
                ?>
            </div>
        </div>
    </section>
</main>
