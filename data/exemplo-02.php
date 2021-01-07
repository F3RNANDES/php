<?php
date_default_timezone_set('UTC');
$ts = strtotime("+1 weeK");
echo date("1,d/m/Y",$ts);
?>