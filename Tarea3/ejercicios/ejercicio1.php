<?php
function esPrimo($n) {
    $noDivisible = true;

    if($n < 1){
        $noDivisible = true;
    }

    for($i = 2; ($i<$n/2)&&$noDivisible;$i++){
        if($n % $i == 0){
            $noDivisible = false;
        }
    }

    return $noDivisible;
}

for($num=1;$num<=1000;$num++){
    if(esPrimo($num)){
        echo $num . " ";
    }
}
?>