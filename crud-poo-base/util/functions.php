<?php 

namespace App\Util;

class Functions {
    static function sanitizeText(string $text){
        return trim(htmlspecialchars($text));
    }
}