<?php

/**
 * Description of Utils
 *
 * @author kuro
 */
class Utils {
    public static function gameName() {
        $variants = [
            "ОфензивΛ",
            "Øфензива",
            "Офæнзива",
            "Офензîва",
            "Оθензива",
            "Офензиўа",
            "ОфеNзива",
        ];
        $i = rand(0, count($variants) - 1);
        return $variants[$i];
    }
    
    public static function removeExtension($filename) {
        $g = explode(".", $filename);
        array_pop($g);
        return implode(".",$g);
    }
}
