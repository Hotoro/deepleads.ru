<?php

/*
* @param string $from: Y-m-d 
* @param string $to: Y-m-d  
* @return string так же в формате Y-m-d 
*/

function getRandomDate($from, $to) {
    
    $fromExplode=explode('-',$from);
    $toExplode=explode('-',$to);
    
    $uTimeFrom=mktime(0, 0, 0, (int)$fromExplode[1], (int)$fromExplode[2], $fromExplode[0]);
    $uTimeTo=mktime(0, 0, 0, (int)$toExplode[1], (int)$toExplode[2], $toExplode[0]);
    
    return date('Y-m-d', rand($uTimeFrom,$uTimeTo));
}

var_dump(getRandomDate('2021-03-01','2021-03-08'));