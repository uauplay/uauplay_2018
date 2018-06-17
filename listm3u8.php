<?php
    require "includes/header.php";
    require "bancodedados/conexao.php";

    $select = "SELECT * FROM arqvm3u8";
    $lists = $pdo->prepare($select);
    $lists->execute();
?>

<body>
<div class="container"> 
<section id="main-content">
<td class="align-middle">
  <section class="wrapper site-min-height">
    <div class="row">
      <div class="col-md-12 mt">
        <div class="col-md-12">
          <div class="search-box">

        <h2>Lista M3U8</h2>
        <p>Lista de arquivos m3u8 adicionados</p>      
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>Logo</th>
                    <th>Canal</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                </tr>
                <?php foreach($lists as $list):?>
                    <tr>
                        <td class="align-middle"><img src="<?=$list['logotipo']?>" width="150" height="100"></td>
                        <td class="align-middle"><?=$list['nome']?></td>
                        <td class="align-middle">
                            <button 
                                class="btn btn-success" 
                                id="play" 
                                onclick="createPlayer('<?=$list['url']?>')"
                                data-toggle="modal" data-target="#modalPlayer">
                                Play
                            </button>
                            <button 
                                class="btn btn-warning" 
                                id="edit" 
                                data-toggle="modal" data-target="#modalListEdit"
                                onclick="selectList(<?=$list['id']?>)">
                                Editar
                            </button>
                        </td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
    </section>
<?php
require "includes/footer.php";
?>