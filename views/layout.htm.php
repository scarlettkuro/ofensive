<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?= GAMENAME ?></title>
    <link rel="icon" href="/favicon.png"/>
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
    <link href="/css/default.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/css/fonts.css" rel="stylesheet" type="text/css" media="all" />

</head>
<body>
<div id="logo" class="container">
    <h1><a href="/" class="icon "><span><?= Utils::gameName() ?></span></a></h1>
</div>
<div id="header">
    <div id="menu" class="container">
        <ul>
            <?php $menu = [
                ['label' => GAMENAME, 'url' => '/'],
                ['label' => 'Дійові особи', 'url' => Url::articles('player')],
                ['label' => 'Персонажі', 'url' => Url::articles('character')],
                ['label' => 'Місця', 'url' => Url::articles('place')],
                ['label' => 'Події', 'url' => Url::story()],
                ['label' => 'Злочини', 'url' => Url::custom('crimes')],
            ]; ?>
            <?php foreach ($menu as $item) : ?>
            <?php $part1 = explode("/",$item['url'])[1]; $part2 = explode("/",$_SERVER['REQUEST_URI'])[1]; ?>
            <li><a href="<?= $item['url'] ?>" <?= ($part1==$part2) || ($part1==$part2 . "s")? "style='background-color:black;'" : ""?> ><?= $item['label'] ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
    
<?= $content; ?>
    
<div id="copyright" class="container">
	<p>Офензива | все одно зможе | тебе знайти.</p>
</div>
</body>
</html>