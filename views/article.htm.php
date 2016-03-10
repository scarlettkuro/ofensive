<!-- Main content -->
<div id="page" class="container">
    <div class="container">
        <h2 class="title"><?= $article->name ?></h2>
        <img src="<?= $article->image ?>" style = "margin:10px" align="right"alt="" />
        <span class="byline title"><?= $article->description ?></span>
	<p><?= $article->text ?></p>
    </div>
</div>

<?php if(count($article->images)) : ?>
<!-- Additional -->
<div id="portfolio-wrapper">
    <div id="portfolio" class="container">
        <div class="major">
            <span class="byline">Інші зображення</span>
        </div>
            <?php foreach($article->images as $picture) : ?>
                <div class="column">
                    <a href="<?= $picture ?>" class="image image-full"><img src="<?= $picture ?>" alt="" /></a>
                </div>			
            <?php endforeach; ?>		
    </div>
</div>	
<?php endif; ?>

<!-- Character group -->
<?php $group = $article->group; ?>
<div id="portfolio-wrapper">
    <div id="portfolio" class="container">
        <div class="major">
            <h2><?= $group->name ?></h2>
            <span class="byline"><?= $group->description ?></span>
        </div>
            <?php foreach($group->characters as $garticle) : ?>
            <?php if ($garticle->slug != $article->slug) : ?>
                <div class="column">
                    <a href="<?=Url::article($garticle->slug,$type)?>" class="image image-full"><img src="<?= $garticle->image ?>" alt="" /></a>
                    <div class="box">
                        <p class="tex"><?= $garticle->description ?></p>
                        <a href="<?=Url::article($garticle->slug,$type)?>" class="button"><?= $garticle->name ?></a>
                    </div>
                </div>	
            <?php endif; ?>	
            <?php endforeach; ?>	
    </div>
</div>
