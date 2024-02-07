<?php
require_once "connection.php";
// commencons par recuperer depuis la base de donnee
$sql='SELECT * FROM `tache`';
// preparons la requette
$req=$db->prepare($sql);
// executons la requette
$req->execute();
$resultat=$req->fetchAll(PDO::FETCH_ASSOC);
// Affichage des valeurs dans lae tableau
    ?>
        <table class="table table-striped table-bordered border-dark my-3">
            <thead class="bg-dark text-light">
                <tr>
                    <th>#</th>
                    <th>Titre</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Compltete</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php
                foreach ($resultat as $key) 
                {
                ?>
                <tbody>
                    <tr>
                        <td><?= $key['id'];?></td>
                        <td><?= $key['titre'];?></td>
                        <td><?= $key['description'];?></td>
                        <td><?= $key['date_ech'];?></td>
                        <td>
                            <?php 
                            if (isset($key['complete']) && ($key['complete']==1)) 
                            {

                                echo <<<claye
                                <span class="fs-3 text-success"><i class="bi-check2-all"></i></span>
                                claye;
                            }else{
                                echo <<<James
                                <span class="fs-3 text-danger"><i class="bi-x-circle"></i></span>
                                James;
                                }
                            ?>
                        </td>
                        <td>
                            <a href="delete.php?id=<?= $key['id']?>" class="btn btn-danger"><i class="bi-trash"></i></a>
                            &nbsp;
                            <a href="update.php?id=<?= $key['id']?>" class="btn btn-primary"><i class="bi-pencil"></i></a>
                        </td>
                    </tr>
                </tbody>
            <?php
            }
            ?>
            <tfoot>
                <tr>
                    <th>#</th>
                    <th>Titre</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Compltete</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>
