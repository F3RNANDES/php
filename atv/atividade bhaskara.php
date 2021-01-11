<?php
function bhaskara($a, $b, $c) {
    $delta = ($b * $b)  - (4 * $a * $c);
    if($delta < 0) 
        return null;
        
    else {
        $raizes = "";
        $m1 = sqrt($delta);
        $r1 = (-$b + $m1) / (2 * $a);
        $raizes[] = $r1;
        $r2 =(-$b - $m1) / (2 * $a);
        $raizes[] = $r2;
        return $raizes;
    }
    
}

print_r(bhaskara(3, 6, 4))

?>