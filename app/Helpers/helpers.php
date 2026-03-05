<?php

if (!function_exists('getInitials')) {
    function getInitials($name)
    {
        $name = trim($name);
        $words = explode(' ', $name);
        
        if (count($words) >= 2) {
            return strtoupper($words[0][0] . $words[1][0]);
        }
        
        return strtoupper(substr($name, 0, 1));
    }
}