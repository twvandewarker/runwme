<?php

    $besties = array();
    
    if ($found) {
        $stringbesties = $row["buddy_list"];
        echo $stringbesties;
        $besties = explode (",", $stringbesties);        
    }

  }


?>