<?php

$position = strpos($argv[1], "s");
if ($position === false){
    exit("Geen tijd gevonden!");
    
} else {
    echo (int)$argv[1] . "seconden";
}

?>