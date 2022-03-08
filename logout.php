<?php
session_start();
unset($_SESSION["permissao"]);
header("Location: login.php");
?>