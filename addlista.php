<?php
    require "includes/header1.php";
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

  		<span> <h1>Teste seu link M3U8.</h1></span>      
        <input type="url"  class="form-control" id="link-play" width="30" placeholder="Cole seu link IPTV aqui para testar"><button
            id="play" 
            type="button" 
            class="btn btn-primary" 
            onclick="createPlayer(getLink())"
            data-toggle="modal" 
            data-target="#modalPlayer">
            Play
        </button>
        <br>
              </form>
				<h1>Adicione sua lista IPTV.</h1>
        <hr>
            <form action="listarqvm3u.php" method="GET">
            <input type="text" class="form-control" name="nome" width="20" placeholder="Nome da sua Lista IPTV">
            <input type="text" class="form-control" name="linkm3u8" width="20" placeholder="Cole seu link IPTV">
            <button type="submit" id="teste" class="btn btn-primary" name="load">Carregar</button> 
        </form>
			</section>
            </section>


<?php
require "includes/footer1.php";
?>

