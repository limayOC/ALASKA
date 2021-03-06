<?php ob_start(); ?>
    <div id="cadre">
        <div class="news">
            <h2>
                <?= htmlspecialchars($post['titre']) ?>
            </h2><br>
                <?php if(empty($editPost)): ?>
            <em>Créé le <?= $post['creation_date_fr'] ?></em><br>
                <?php endif; ?>
            <p><?= htmlspecialchars($post['contenu']) ?></p>  
            <h2><a href="<?=MON_SITE?>listPosts"> Retour</a></h2>             
        </div>

        <?php if(isset($_SESSION['userType']) && $_SESSION['userType']==1): ?> 
                
        <div id="singleComment">
            <h2>Commentaires</h2>
            <?php foreach ($comments as $comment){?>
                <p>
                    <strong><?= htmlspecialchars($comment['author']) ?></strong>: 
                    le <?= htmlspecialchars($comment['comment_date_fr']) ?><br><br>
                    <?= htmlspecialchars($comment['comment']) ?><br>
                    <?php if(isset($_SESSION["userType"])): ?>

                     <br><a href="<?=MON_SITE?>alertComment/<?=$comment['id']?>">Signaler</a>
                    <?php endif; ?>
                </p>
            <?php }?>
        </div>
    <?php endif; ?> 


    <?php if(isset($_SESSION['userType'])): ?>

        <form action="<?= MON_SITE ?>addComment/<?= $post['id'] ?>" method="post" id="formCom">
            <h2>Ajouter un commentaire</h2>
            <div id="author">
                <label for="author">Auteur</label><br/>
                <input type="text" name="author" />
            </div><br/>
            <div id="comment">
                <label for="comment">Commentaire</label><br/>
                <textarea name="comment"></textarea>
            </div>
            <input type="hidden" name="postId" value="<?= $post['id'] ?>">
            <input type="submit" id="ajouter" value="Ajouter" />
        </form><br>
                <div id="retourArticles"><h3><a href="<?= MON_SITE ?>listPosts">Retour aux articles</a></h3></div>
    <?php endif; ?>
    </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require'template.php'; ?>

</div>
