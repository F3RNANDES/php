<?php
date_default_timezone_set('UTC');
$dt = new DateTime();
echo $dt->format("d/m/Y H:i:s");
?>