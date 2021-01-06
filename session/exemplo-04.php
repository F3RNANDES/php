<?php
session_id('a758963f18a681722bb6081b8db9b616');
require_once("config.php");
session_regenerate_id();
echo session_id();
var_dump($_SESSION);
?>