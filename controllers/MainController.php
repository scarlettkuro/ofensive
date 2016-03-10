<?php
class MainController {
    
    static function index() {
        return self::custom('index');
    }
    
    static function custom($name) {
        return render("$name.htm.php", 'layout.htm.php');
    }
    
    static function article($type,$name) {
        set('article', new Article($name, $type));
        set('type', $type);
        return render('article.htm.php', 'layout.htm.php');
    }
    
    static function articles($type) {
        set('groups', Group::getGroups($type));
        set('type', $type);
        return render('articles.htm.php', 'layout.htm.php');
    }

}

?>
