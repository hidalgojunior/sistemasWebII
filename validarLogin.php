<meta charset="UTF-8">
<?php
$usuario = $_REQUEST["login"];
$senha = $_REQUEST["senha"];
echo "$usuario <br> $senha<br>";

$conexao = new mysqli("localhost:3306", "root", "");
$conexao->set_charset("UTF8");
if ($conexao->connect_error) {
    die("Falha ao conectar: " . $conexao->connect_error);
}
if (!$conexao->select_db("login")) {
    die("O Banco de dados não existe");
}
$sql = "select * from login where usuario = '$usuario' and senha ='". md5($senha)."'";
$result = mysqli_query($conexao, $sql);
$dados = mysqli_fetch_array($result);
$permissao = $dados["permissao"];
echo $permissao;
session_start();
$_SESSION["permissao"] = $permissao;
if($permissao == 1){
    header("Location: adm");
}else if($permissao == 2){
    header("Location: aluno");
}else{
    $_SESSION["erroLogin"] = "Usuario e/ou senha invalidos";
    header("Location: login.php");
}






/*





session_start();
if($permissao == 1){
    $_SESSION["permissao"] = 1;
    header("Location: adm");
}else if($permissao == 2){
    header("Location: aluno");
    $_SESSION["permissao"] = 2;
}else{
    header("Location: login.php");
    $_SESSION["permissao"] = 0;
}*/

?>
