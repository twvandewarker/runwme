<?php

    $besties = array();
    echo 'here';
    if ($found) {
        $stringbesties = $row["buddy_list"];
        echo $stringbesties;
        $besties = explode (",", $stringbesties);        
    }

  


?>