<?php
function ModeToNum($list) {
    $num = 0;
    if($list[0]) { $num += 1};
    if($list[1]) { $num += 2};
    if($list[2]) { $num += 4};
}

function TimeToNum($list) {
    $num = 0;
    for ( $i = 0; $i < 21; $i++ ){
        if($list[i]) { $num += (1<<i);}
    }
}

function NumToMode($num){
    $list = array();
    for ( $i = 0; $i<3; $i++ ){
        $list[i]= $num & (1<<i);}
    }
}

function NumToTime($num){
    $list = array();
    for ( $i = 0; $i<21; $i++ ){
        $list[i]= $num & (1<<i);}
    }
}


?>