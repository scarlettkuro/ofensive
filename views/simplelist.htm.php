<!-- Main content -->
<div id="page" class="container">
    <div class="container" style="margin-left: 7em;">
        <h1 style="margin-bottom: 1em;"><?= $typeinfo->name ?></h1>
        <p></p>
        <?php if ($typeinfo->desc) $articles = array_reverse($articles); ?>
        <?php foreach($articles as $article) : ?>
            <p><a href="<?= Url::article($article->slug, $type)?>"><strong><?= $article->name ?></strong>&nbsp;&nbsp;<?= $article->description ?></a></p>
        <?php endforeach; ?>
    </div>
</div>