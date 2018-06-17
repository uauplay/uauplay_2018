<?php
    require "includes/header1.php";
    
$linkm3u = $_GET['linkm3u8'];
$nome = isset($_GET['nome']) ? $_GET['nome'] : '';
$select = "SELECT * FROM arqvm3u8 WHERE lista = '$linkm3u'";
$stmt = $pdo->prepare($select);
if($stmt->execute()) {
    if ($stmt->rowCount() > 0) {
           $file = $linkm3u;
    } else {
        $insert = "INSERT INTO arqvm3u8 (lista,nome) VALUES ('$linkm3u','$nome')";
        $stmt2 = $pdo->prepare($insert);
        if($stmt2->execute()){
            $file = $linkm3u;
        } else {
            echo "Erro insert";
            print_r($stmt2->errorInfo());
        }
    }
} else {
    echo "Erro Select";
    print_r($stmt->errorInfo());
}


?>
<div class="container">
<h1><?=$nome?></h1>


<?php
require "includes/convertListM3u.php";
    ?>
<div>
<?php
require "includes/footer1.php";
?>