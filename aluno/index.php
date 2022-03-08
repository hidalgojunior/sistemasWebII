Aluno
<?php

session_start();
unset($_SESSION["erroLogin"]);
if($_SESSION["permissao"]==2){
    echo "OK";
}else{
    header("Location: ../login.php");
}
?>

<a href="../logout.php">Sair</a>