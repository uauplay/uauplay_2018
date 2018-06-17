<?php
require "bancodedados/conexao.php";

$id         = $_GET['id'];
$delete = "DELETE FROM arqvm3u8 WHERE id = :id";
$stmt = $pdo->prepare($delete);
$stmt->bindParam(":id", $id, PDO::PARAM_INT);
if($stmt->execute()){
    echo 'ok';    
    echo $stmt->rowCount();
} else {
    print_r($stmt->errorInfo());
}
header("Location:exibirarqm3u.php");