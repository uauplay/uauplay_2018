<?php
    require "includes/header2.php";
?>
<body>
		<!--
			Adicionar lista IPTV
		-->
        <div class="container"> 
<section id="main-content">
<td class="align-middle">
  <section class="wrapper site-min-height">
    <div class="row">
      <div class="col-md-12 mt">
        <div class="col-md-12">
          <div class="search-box">

          <h2>Listas IPTV</h2>
            <table class="table bg-darken-4">
            <thead>
               </h1><th>Lista</th></h1>
                </h1><th>Ação</th></h1>
                   </thead>
            <tbody>
                     <?php foreach($lists as $list):?>
                      <td class="align-middle"><?=$list['nome']?></td>
                        <td class="align-middle">
                            <a 
                                class="btn btn-success"
                                href="listarqvm3u_cli.php?nome=<?=$list['nome']?>&linkm3u8=<?=$list['lista']?>" 
                                id="carregar" >
                                Carregar
                            </a>
                            </td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
  </div>

</section>
<?php
require "includes/footer2.php";
require "pagination.php";
?>