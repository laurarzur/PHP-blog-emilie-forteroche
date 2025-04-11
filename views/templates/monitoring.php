<?php
    /**
     * Ce template affiche la page de monitoring des articles.
     */
?>

<h2>Monitoring des articles</h2>

<table class="monitoring-table">
    <thead>
        <tr>
            <th>
                Titre
                <span>
                    <a href="index.php?action=monitoring&column=title"><i class="fa-solid fa-sort-up"></i></a>
                    <a href="index.php?action=monitoring&column=title&order=desc"><i class="fa-solid fa-sort-down"></i></a>
                </span>
            </th>
            <th>
                Nombre de vues
                <span>
                    <a href="index.php?action=monitoring&column=views"><i class="fa-solid fa-sort-up"></i></a>
                    <a href="index.php?action=monitoring&column=views&order=desc"><i class="fa-solid fa-sort-down"></i></a>
                </span>
            </th>
            <th>
                Nombre de commentaires
                <span>
                    <a href="index.php?action=monitoring&column=comments_number"><i class="fa-solid fa-sort-up"></i></a>
                    <a href="index.php?action=monitoring&column=comments_number&order=desc"><i class="fa-solid fa-sort-down"></i></a>
                </span>
            </th>
            <th>
                Date de publication
                <span>
                    <a href="index.php?action=monitoring&column=date_creation"><i class="fa-solid fa-sort-up"></i></a>
                    <a href="index.php?action=monitoring&column=date_creation&order=desc"><i class="fa-solid fa-sort-down"></i></a>
                </span>
            </th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($articles as $article) { ?>
        <tr>
            <td class="article-title"><?= $article->getTitle() ?></td>
            <td class="article-views"><?= $article->getViews() ?></td> 
            <td class="article-comments"><?= $article->getCommentsNumber() ?></td> 
            <td class="article-date"><?= ucfirst(Utils::convertDateToFrenchFormat($article->getDateCreation())) ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>