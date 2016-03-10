<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Url
 *
 * @author kuro
 */
class Url {
    
    public static function articles($type) {
        return "/{$type}s";
    }
    
    public static function article($name, $type) {
        return "/{$type}s/{$name}";
    }
    
    public static function custom($name) {
        return "/{$name}--html";
    }
}
