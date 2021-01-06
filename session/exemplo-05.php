<?php
require_once("config.php");
echo session_save_path();
echo "<br>";
var_dump(session_status());
switch(session_status()){
    case PHP_SESSION_DISABLED;
    echo "as sossões estiverem desabilidatadas";
    break;
    
    case PHP_SESSION_NONE;
    echo "as sessoẽs estiveram habilitadas, mas nenhuma existir";
    break;

    case PHP_SESSION_ACTIVE;
    echo "as sessões estiveram habilitadas, e uma existir";
    break;
}
?>