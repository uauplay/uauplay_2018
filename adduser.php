<?php
    require "includes/header1.php";
?>
<body>
<!--
			Criar usuarios
		-->
<div class="container"> 
<section id="main-content">
<td class="align-middle">
  <section class="wrapper site-min-height">
    <div class="row">
        <div class="col-md-12">
          <div class="search-box">
              <form class="form-inline" action="/colaboradores" accept-charset="UTF-8" method="get"><input name="utf8" type="hidden" value="&#x2713;" />
      <div class="form-group">
    <a class="btn btn-info" href="addcliente.php">Novo Cliente</a>
    <input class="form-control my-2 my-lg-1"  type="Buscar" id="filter" placeholder="Nome ou codigo...">
      </div>
 
</form>


<!--
			usuarios
		-->
    <div class="container"> 
    <section id="main-content">
</div>
          </div>
          <div class="row">
      <div class="col-md-12">
          <div class="col-md-2 mb">
            <div class="white-panel pn" style="min-height: 215px;">
  <div class="white-header">
      <h6>Teste 1</h6>
    <small style="color: white;">001</small>
  </div>
  <p><img class="img-circle" width="80" src="images/user.png" alt="Nick" /></p>
  <p>
    <div class="btn-group">
  	  <button type="button" class="btn btn-default btn-sm">Opções</button>
  	  <button type="button" class="btn btn-theme btn-sm dropdown-toggle" data-toggle="dropdown">
  	  </button>
  	  <ul class="dropdown-menu" role="menu">
  	     <li><a href="#">Editar</a></li>
    	    <li><a href="#">Pagamento</a></li>
          <li><a href="#">Comunicados</a></li>
        	    <li class="divider"></li>
          <li><a href="/eventos?employee_id=9&amp;kind=vacation">Bloquear</a></li>
      </ul>
        <div class="checkbox" style="margin-top: 40px;">
         </label>
        </div>
  	</div>
  </p>
</div>




<?php
require "includes/footer1.php";
?>

