<?php 
$words = "I am going to school";

    function replaceLetters($words) {
        $lower = strtolower($words);
        $new = array();
        $array = str_split($lower);
        $abb =  array('a','o','p','t','s','j','m');
        $newa = array();
        foreach ($abb as $arr){
            if (in_array($arr, $array)){
            array_push($newa, $arr);
            }
        }
        if (in_array('a', $newa)) {
            $output  = str_replace('a', 'e', $lower);
        }
        if (in_array('o', $newa)) {
            $output  = str_replace('o', 'u', $output);
        }
        if (in_array('p', $newa)) {
            $output  = str_replace('p', 'b', $output);
        }
        if (in_array('t', $newa)) {
            $output  = str_replace('t', 'd', $output);
        }
        if (in_array('s', $newa)) {
            $output  = str_replace('s', 'c', $output);
        }
        if (in_array('j', $newa)) {
            $output  = str_replace('j', 'g', $output);
        }
        if (in_array('m', $newa)) {
            $output  = str_replace('m', 'n', $output);
        }
            $code = md5($output);
            return $code;
    }

?>