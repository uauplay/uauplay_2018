<?php
require "bancodedados/conexao.php";
$select = "SELECT * FROM arqvm3u8 WHERE id=" . $_GET['id'];
$stmt = $pdo->prepare($select);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);

echo json_encode($result);
