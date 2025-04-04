<?php
    /**
     * Ce template affiche la page de monitoring des articles.
     */
?>

<h2>Monitoring des articles</h2>

<table>
    <thead>
        <tr>
            <th>Titre</th>
            <th>Nombre de vues</th>
            <th>Nombre de commentaires</th>
            <th>Date de publication</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($articles as $article) { ?>
        <tr>
            <td><?= $article->getTitle() ?></td>
            <td><?= $article->getViews() ?></td> 
            <td><?= "Nombre de commentaires" ?></td> 
            <td><?= ucfirst(Utils::convertDateToFrenchFormat($article->getDateCreation())) ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>