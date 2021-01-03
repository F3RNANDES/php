<?php
$name = "Glaucio";
function teste(){
    global $name;
    echo $name;
}
function teste2($name ="Glaucio"){
    echo "sim realmente o nome é " . $name;
}

?>