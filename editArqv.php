<?php
require "bancodedados/conexao.php";

$id         = $_POST['id'];
$lista       = $_POST['lista'];
$nome      = $_POST['nome'];
$update = "UPDATE arqvm3u8 SET lista = :lista, nome = :nome WHERE id = :id";
$stmt = $pdo->prepare($update);
$stmt->bindParam(":id", $id, PDO::PARAM_INT);
$stmt->bindParam(":lista", $lista, PDO::PARAM_STR);
$stmt->bindParam(":nome", $nome, PDO::PARAM_STR);
if($stmt->execute()){
    echo 'ok';    
    echo $stmt->rowCount();
} else {
    print_r($stmt->errorInfo());
}
header("Location:exibirarqm3u.php");