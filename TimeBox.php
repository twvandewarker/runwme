<?php
//include only
include("transformations.php");
$TimeKey = array("Mon mor", "Mon aft", "Mon eve", "Tues mor", "Tues aft", "Tues eve");
echo '<div>
     <table style="width:30%">
      <tr>';
      $TimeList = NumToTime($row["times_available"]);
      for ( $i = 0; $i < 7; $i++ ){
        if($list[i]) { 
            echo '<td style="font-weight:bold"> '. array(i) .' </td>';
        } else{
            echo '<td style="color:grey"> '. array(i) .' </td>';
        }
    }
    echo '</tr><tr>';
    for ( $i = 7; $i < 14; $i++ ){
            if($list[i]) { 
                echo '<td style="font-weight:bold"> '. array(i) .' </td>';
            } else{
                echo '<td style="color:grey"> '. array(i) .' </td>';
            }
        }
    echo '</tr><tr>';
    for ( $i = 14; $i < 21; $i++ ){
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