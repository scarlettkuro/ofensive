<?php

/**
 * Description of Url
 *
 * @author kuro
 * This class creates URL's and their templates for router
 */
class Url {
    
    public static function articles($type) {
        return "/{$type}s";
    }
    
    public static function article($name, $type) {
        return "/{$type}/{$name}";
    }
    
    public static function custom($name) {
        return "/{$name}:html";
    }
}
