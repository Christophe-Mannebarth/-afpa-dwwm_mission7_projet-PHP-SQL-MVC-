<?php $title = htmlspecialchars($post['title']); ?>

<?php ob_start(); ?>

<div class="container">
    <div class="row my-3">
        <div class="col">
            <h1>Le blog (version MVC)</h1>
            <p><a href="./index.php">Retour à la liste des billets</a></p>
            <h2>Billet du blog :</h2>

            <div class="news">
                <h3>
                    <?= htmlspecialchars($post['title']) ?>
                    <em>le <?= $post['creation_date_fr'] ?></em>
                </h3>
                <p>
                    <?= nl2br(htmlspecialchars($post['content'])) ?>
                </p>
            </div>
            <div class="row my-3">
                <div class="col-6">
                    <h2>Commentaires</h2>

                    <?php
                    while ($comment = $comments->fetch()) {
                        ?>
                            <p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?><a href="index.php?action=viewComment&amp;id=<?= $comment['id'] ?>"> &#x270F</a></p>
                            <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
                        <?php
                    }
                    ?>
                </div>
                <div class="col-6">
                    <h2>Commenter</h2>
                    <p>Veuillez taper votre pseudo :</p>
                    <form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
                        <div>
                            <label for="author">Auteur</label><br />
                            <input type="text" id="author" name="author" />
                        </div>
                        <div>
                            <label for="comment">Commentaire</label><br />
                            <textarea id="comment" name="comment" rows="10" cols="70"></textarea>
                        </div>
                        <div>
                            <p><input type="submit" class="btn btn-primary" value="Envoyer" /></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('./view/frontend/template.php'); ?>



