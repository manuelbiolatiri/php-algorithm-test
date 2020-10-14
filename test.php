<?php 
$words = "I am going to school";

function ($words) {
    $lower = strtolower($words);
    $arr = array();
    $one = str_replace("a","e",$lower);
    $two = str_replace("o","u",$lower);
    $three = str_replace("p","b",$lower);
    $four = str_replace("t","d",$lower);
    $five = str_replace("s","c",$lower);
    $six = str_replace("j","g",$lower);
    $seven = str_replace("m","n",$lower);
    $ar = array($one,$two, $three, $four, $five, $six, $seven);
    $push = array_push($arr,$ar );
    return $push;
    $code = md5($push);
    return $code;
}
     

?>