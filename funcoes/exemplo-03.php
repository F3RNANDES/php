<?php
function ola($texto = "mundo", $periodo = "bomdia"){
    return "Olá $texto! $periodo!<br>";
}
echo ola("", "Boa noite");
echo ola();
echo ola("Glaucio", "Boa tarde");
echo ola("João","");
?>