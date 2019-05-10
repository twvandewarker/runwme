<?php
//include only
include("transformations.php");
$ModeKey = array("run", "walk", "bike");
echo '<div>
     <table style="width:30%">
      <tr>';
      $ModeList = NumToMode($row["run_walk_bike"]);
      for ( $i = 0; $i < 3; $i++ ){
        if($list[i]) { 
            echo '<td style="font-weight:bold"> '. array(i) .' </td>';
        } else{
            echo '<td style="color:grey"> '. array(i) .' </td>';
        }
    }

echo'      </tr>
    </table>
    </div>
    ';



?>