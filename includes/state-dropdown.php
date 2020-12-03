<?php


    include('state-list.php');

   $key_selected  = (isset($state)) ? $state : '';

    $string="<select name='state' class='smallfield form-dropdown req form-control' id='state' required>";
    if (!empty($state_values)) {
        if ($key_selected=="" || !isset($key_selected)) {
            $string.="<option value=\"\">State:</option>\n";
        }
        foreach($state_values as $state_short=>$state_full) {
            if ($key_selected!="" && $key_selected==$state_short) {
                $additional=" SELECTED";
            }
            else {
                $additional="";
            }
                $string.="<option value=\"".$state_short."\"".$additional.">".$state_full."</option>\n";
        }
    }
    $string.="</select>\n";

    echo $string;

?>