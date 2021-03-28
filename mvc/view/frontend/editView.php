<?php $title = 'Modifier un commentaire' ?>

<?php ob_start(); ?>

<div class="container">
    <div class="row my-3">
        <div class="col">
            <h1>Le blog (version MVC)</h1>
            <p><a href="./index.php">Retour à la liste des billets</a></p>
            <h2>Modification du commentaire :</h2>

            <form
                action="./index.php?action=editComment&amp;id=<?= $comment['id'] ?>"
                method="post">
                <div>
                    <p>Auteur : <?= $comment['author'] ?>
                    </p>
                    <label for="comment">Commentaire</label><br />
                    <textarea id="comment" name="comment" rows="10" cols="70"><?= $comment['comment'] ?></textarea>
                </div>
                <div>
                <p><input type="submit" class="btn btn-primary" value="Modifier" /></p>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('./view/frontend/template.php');
