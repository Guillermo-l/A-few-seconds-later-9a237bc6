<?php

$position = strpos($argv[1], "s");
if ($position == true){
    echo (int)$argv[1] . "seconden";
    
} else {
 exit("Geen tijd gevonden!");
    
}

?>
