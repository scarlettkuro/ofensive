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
        //specify direct list
        //if (in_array($type, ['story', 'part']))
        
        //or just check if there are images
        if (is_dir(DATA . "/images/{$type}s"))
            return self::grouplist ($type);
        else
            return self::simplelist ($type);
    }
    
    static function grouplist($type) {
        set('groups', Group::getGroups($type));
        set('type', $type);
        return render('grouplist.htm.php', 'layout.htm.php');
    }
    
    static function simplelist($type) {
        set('articles', Article::getArticles($type));
        set('typeinfo', Article::getTypeInfo($type));
        set('type', $type);
        return render("simplelist.htm.php", 'layout.htm.php');
    }

}

?>
