<?php
$a = 2;
$b = 5;
$c = 1;
$string="";
if ($a<=$b && $a<=$c) {
    $string .= $a." ";
    if($b<=$c) {
        $string .= $b." ".$c;
    }
    else {
        $string .= $c." ".$b;
    }
}
if ($b<=$a && $b<=$c) {
    $string = $b." ";
    if($a<=$c) {
        $string .= $a." ".$c;
    }
    else {
        $string .= $c." ".$a;
    }
}
if ($c<=$a && $c<=$b) {
    $string = $c." ";
    if($a<=$b) {
        $string .= $a." ".$b;
    }
    else {
        $string .= $b." ".$a;
    }
}
echo $string."<br>".strrev($string);
?>
