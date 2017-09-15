<?php
namespace Application\Model;

class Helper
{
    public static function generateUrl($idarticle, $titrearticle) {
    
        # public/article/[:idarticle]-[:slug].html
        # ou : idarticle = $_GET['idarticle'];
        return PUBLIC_URL.'article/'.$idarticle.'-'.
            self::generateSlug($titrearticle).'.html';
    }
    
    public static function generateSlug($text) {
        // replace non letter or digits by -
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);
        
        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        
        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);
        
        // trim
        $text = trim($text, '-');
        
        // remove duplicate -
        $text = preg_replace('~-+~', '-', $text);
        
        // lowercase
        $text = strtolower($text);
        
        if (empty($text)) {
            return 'n-a';
        }
        
        return $text;
    }
}

