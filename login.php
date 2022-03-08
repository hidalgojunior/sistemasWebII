<form action="validarLogin.php" method="POST">
    Login <input type="text" name="login" ><br>
    Senha <input type="password" name="senha" ><br>
    <input type="submit" value="Logar"/>
</form>
<?php
session_start();
if(isset($_SESSION["erroLogin"])){
    echo $_SESSION["erroLogin"];
}
?>