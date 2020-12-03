<?php


include('state-list.php');

$key_selected = (isset($license_state)) ? $license_state : '';

$string="<select name='license_state' class='smallfield form-dropdown req form-control' id='license_state' required>";
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