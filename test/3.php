<?php
for ($a = 1; $a < 10; $a++) {
    for ($b = 0; $b < 10; $b++) {
        if ($a == $b) {
            continue;
        }
        for ($c = 1; $c < 10; $c++) {
            if(count([$a,$b,$c])!==count(array_unique([$a,$b,$c]))){
                continue;
            }
            for ($d = 0; $d < 10; $d++) {
                if(count([$a,$b,$c,$d])!==count(array_unique([$a,$b,$c,$d]))){
                continue;
            }
                if(($a * 10 + $b) - ($c * 10 + $d) < 0){
                    continue;
                }
                for ($e = 1; $e < 10; $e++) {
                    if(count([$a,$b,$c,$d,$e])!==count(array_unique([$a,$b,$c,$d,$e]))){
                continue;
            }
                    for ($f = 0; $f < 10; $f++) {
                        if(count([$a,$b,$c,$d,$e,$f])!==count(array_unique([$a,$b,$c,$d,$e,$f]))){
                continue;
            }
                        if(($a * 10 + $b) - ($c * 10 + $d) !== ($e * 10 + $f)){
                            continue;
                        }
                        for ($g = 1; $g < 10; $g++) {
                            if(count([$a,$b,$c,$d,$e,$f,$g])!==count(array_unique([$a,$b,$c,$d,$e,$f,$g]))){
                continue;
            }
                            for ($h = 0; $h < 10; $h++) {
                                if(count([$a,$b,$c,$d,$e,$f,$g,$h])!==count(array_unique([$a,$b,$c,$d,$e,$f,$g,$h]))){
                continue;
            }
                                    for ($p=1; $p < 10; $p++) { 
                                        $arr = [$a, $b, $c, $d, $e, $f, $g, $h ,$p];
                                         if (count(array_unique($arr))==count($arr)&&($e * 10 + $f) + ($g * 10 + $h) == $p*100+$p*10+$p) {
                                            print_r($arr);
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }