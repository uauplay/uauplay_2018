<?php
require "bancodedados/conexao.php";

$id         = $_POST['id'];
$nome       = $_POST['nome'];
$url        = $_POST['url'];
$logo       = $_POST['logo'];
$formato    = $_POST['formato'];

$update = "UPDATE lista_m3u8 SET nome = :nome, url = :url, logotipo = :logo, formato = :formato WHERE id = :id";
$stmt = $pdo->prepare($update);
$stmt->bindParam(":id", $id, PDO::PARAM_INT);
$stmt->bindParam(":url", $url, PDO::PARAM_STR);
$stmt->bindParam(":nome", $nome, PDO::PARAM_STR);
$stmt->bindParam(":logo", $logo, PDO::PARAM_STR);
$stmt->bindParam(":formato", $formato, PDO::PARAM_STR);

if($stmt->execute()){
    echo 'ok';    
} else {
    print_r($stmt->errorInfo());
}
header("Location:listm3u8.php");