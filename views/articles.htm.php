
<!-- Character groups -->
<div id="portfolio-wrapper">
<?php foreach($groups as $group) : ?>
        <div id="portfolio" style="margin-bottom: 3em;" class="container">
            <div class="major">
                <h2><?= $group->name ?></h2>
                <span class="byline"><?= $group->description ?></span>
            </div>
                <?php foreach($group->characters as $article) : ?>
                    <div class="column">
                        <a href="<?=Url::article($article->slug,$type)?>" class="image image-full"><img src="<?= $article->image ?>" alt="" /></a>
                        <div class="box">
                            <p class="tex"><?= $article->description ?></p>
                            <a href="<?=Url::article($article->slug,$type)?>" class="button"><?= $article->name ?></a>
                        </div>
                    </div>		
                <?php endforeach; ?>	
        </div>
<?php endforeach; ?>	
</div>
