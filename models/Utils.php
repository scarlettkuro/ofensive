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
            "ОфеĤзива",
        ];
        $i = rand(0, count($variants) - 1);
        return $variants[$i];
    }
}
