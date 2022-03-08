<?php
session_start();
unset($_SESSION["erroLogin"]);
if($_SESSION["permissao"]==1){
    echo "Funcionou";
}else{
    header("Location: ../login.php");
}
?>