<!-- Main content -->
<div id="page" class="container">
    <div class="container" style="margin-left: 7em;">
        <h1>Записи подій</h1>
        <p></p>
        <?php foreach(array_reverse($articles) as $article) : ?>
            <p><a href="<?= Url::article($article->slug, $type)?>"><strong><?= $article->name ?></strong> <?= $article->description ?></a></p>
        <?php endforeach; ?>
    </div>
</div>