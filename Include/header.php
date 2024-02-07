<?php
//inclusion de la base de donnee
require_once "connection.php";
require_once './config/constante.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($titre) && !empty($titre)?$titre." | ".TITRE : TITRE?></title>
    <meta name="description" content="<?= isset($description) && !empty($description)?$description : DESCRIPTION ?>">
    <link rel="stylesheet" href="./Include/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./Include/bootstrap/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="./Include/icons-1.9.1/font/bootstrap-icons.css">
	<link rel="stylesheet" href="./style/style.css">
    <script src="./Include/bootstrap/dist/js/bootstrap.bundle.min.js" defer></script>
</head>
    <header class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a href="/TODOLISTE/" class="navbar-brand" title="Afficher la page d'accueil">
                <?= TITRE?>           
            </a>
            <button title="Afficher menu" class="navbar-toggler" aria-controls="offcanvasNavbar" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" type="button">
                <i class="navbar-toggler-icon"></i>
            </button>
            <nav class="nav offcanvas offcanvas-end" aria-labelledby="offcanvasNavbarLabel" id="offcanvasNavbar" tabindex="-1">
                <div class="offcanvas-header bg-info">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                        <a href="http://localhost/TODOLISTE" title="Afficher la page d'accueil" class="navbar-brand text-dark">
                        Mon site                        
                        </a>
                    </h5>
                    <button class="btn-close" data-bs-dismiss="offcanvas" title="Fermer" type="button" aria-label="Fermer"></button>
                </div>
                <div class="offcanvas-body bg-dark">
                    <ul class="navbar-nav nav-pills" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="http://localhost/TODOLISTE" aria-selected="true" title="Afficher la page d'accueil" id="nav-home-tab" aria-controls="nav-home" class="nav-link active" role="tab">
                                <i class="bi-house-fill"></i>
                                Accueil
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

<body>