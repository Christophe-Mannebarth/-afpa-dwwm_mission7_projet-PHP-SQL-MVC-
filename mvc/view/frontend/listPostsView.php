<?php $title = 'AFPA DWWM Mission 7 - Blog'; ?>

<?php ob_start(); ?>

<div class="container">
    <div class="row my-3">
        <div class="col">
            <h1>Le blog (version MVC)</h1>
            <p><a href="../liste_travaux.php">Retour liste des travaux</a></p>
            <h2>Billets du blog :</h2>

            <?php
            while ($data = $posts->fetch()) {
                ?>
            <div class="news">
                <h3>
                    <?= htmlspecialchars($data['title']) ?>
                    <em>le <?= $data['creation_date_fr'] ?></em>
                </h3>

                <p>
                    <?= nl2br(htmlspecialchars($data['content'])) ?>
                    <br />
                    <em><a
                            href="./index.php?action=post&amp;id=<?= $data['id'] ?>">Commentaires</a></em>
                </p>
            </div>
            <?php
            }
            $posts->closeCursor();
            ?>
        </div>
    </div>
</div>
<?php $content = ob_get_clean(); ?>

<?php require('./view/frontend/template.php');?>




