<?php include("includes/header1.php");

   ?>
<body>
<!--
			Clientes
		-->
    <section id="main-content">
  <section class="wrapper site-min-height">
     
    <div class="row mt">
  <div class="col-lg-12">
    <div class="form-panel">
      <h4 class="mb">
        <i class="fa fa-angle-right"></i> Editar Usuario
      </h4>

      <div class="alert alert-info">
        <b>Importante!</b><br>
        É necessários preencher todos os campos para que a Talento TV possa emitir as faturas mensais.
      </div>
      <form autocomplete="off" class="simple_form form-horizontal style-form" novalidate="novalidate" id="edit_company_4" enctype="multipart/form-data" action="/empresas/4" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="_method" value="patch" /><input type="hidden" name="authenticity_token" value="Z2Lpnh/E/rK/7WxkOhbuL0Bm8MxYCD+cU3k9Hns6EoXfMTHNtCZ0ZACsQq32Qwpm2CB+wdOLo6crzuYehR/7yQ==" />
        

        <div class="form-group" style="border:none;">
          <div class="col-lg-12">
            <p><img class="img-circle" width="80" src="https://couto-seguros.s3.amazonaws.com/uploads/company/avatar/4/logo-marca.png" alt="Logo marca" /></p>
            <div class="input file optional company_avatar"><input style="margin-bottom: -30px;" class="file optional custom-file-input" type="file" name="company[avatar]" id="company_avatar" /></div>
            <div class="input hidden company_avatar_cache"><input class="hidden" type="hidden" name="company[avatar_cache]" id="company_avatar_cache" /></div>
          </div>
        </div>

        <div class="form-group" style="border:none;">
          <div class="col-lg-4">
            <div class="input string required company_full_name"><label class="string required" for="company_full_name"><abbr title="obrigatório">*</abbr> Nome</label><input class="string required form-control" type="text" value="" name="company[full_name]" id="company_full_name" /></div>
          </div>
          <div class="col-lg-3">
            <div class="input email required company_email"><label class="email required" for="company_email"><abbr title="obrigatório">*</abbr> E-mail</label><input class="string email required form-control" type="email" value="" name="company[email]" id="company_email" /></div>
          </div>
          <div class="col-lg-3">
            <div class="input password optional company_password field_with_hint"><label class="password optional" for="company_password">Senha</label><input autocomplete="false" class="password optional form-control" type="password" name="company[password]" id="company_password" /><span class="hint">Deixe em branco para não alterar</span></div>
          </div>
        </div>

        
          <h4 class="mb">
            <i class="fa fa-angle-right"></i> Informações básicas
          </h4>
          <div class="form-group" style="border:none;">
            <div class="col-lg-2">
              <div class="input string optional company_information_cnpj"><label class="string optional" for="company_information_attributes_cnpj">CNPJ</label><input class="string optional form-control cnpj" type="text" value="" name="company[information_attributes][cnpj]" id="company_information_attributes_cnpj" /></div>
            </div>
            <div class="col-lg-2">
              <div class="input string optional company_information_cpf"><label class="string optional" for="company_information_attributes_cpf">CPF</label><input class="string optional form-control cpf" type="text" value="" name="company[information_attributes][cpf]" id="company_information_attributes_cpf" /></div>
            </div>
            <div class="col-lg-2">
              <div class="input select optional company_information_fiscal_access"><label class="select optional" for="company_information_attributes_fiscal_access">Acesso fiscal?</label><select class="select optional form-control" name="company[information_attributes][fiscal_access]" id="company_information_attributes_fiscal_access"><option selected="selected" value="true">Sim</option>
<option value="false">Não</option></select></div>
            </div>
            <div class="col-lg-3">
              <div class="input select optional company_information_simple_national"><label class="select optional" for="company_information_attributes_simple_national">Simples Nacional</label><select class="select optional form-control" name="company[information_attributes][simple_national]" id="company_information_attributes_simple_national"><option value="true">Sim</option>
<option selected="selected" value="false">Não</option></select></div>
            </div>
            <div class="col-lg-3">
              <div class="input select optional company_information_person_type"><label class="select optional" for="company_information_attributes_person_type">Tipo pessoa</label><select class="select optional form-control" name="company[information_attributes][person_type]" id="company_information_attributes_person_type"><option selected="selected" value="Pessoa Física">Pessoa Física</option>
<option value="Pessoa Jurídica">Pessoa Jurídica</option></select></div>
            </div>
          </div>

          <div class="form-group" style="border:none;">
            <div class="col-lg-3">
              <div class="input string optional company_information_person_name"><label class="string optional" for="company_information_attributes_person_name">Nome</label><input class="string optional form-control" placeholder="Caso pessoa Física" type="text" value="" name="company[information_attributes][person_name]" id="company_information_attributes_person_name" /></div>
            </div>
            <div class="col-lg-3">
              <div class="input string optional company_information_company_name"><label class="string optional" for="company_information_attributes_company_name">Razão social</label><input class="string optional form-control" placeholder="Caso pessoa Jurídica" type="text" value="" name="company[information_attributes][company_name]" id="company_information_attributes_company_name" /></div>
            </div>
            <div class="col-lg-3">
              <div class="input string optional company_information_resp_name"><label class="string optional" for="company_information_attributes_resp_name">Nome do responsável</label><input class="string optional form-control" placeholder="Caso pessoa Jurídica" type="text" value="" name="company[information_attributes][resp_name]" id="company_information_attributes_resp_name" /></div>
            </div>
            <div class="col-lg-3">
              <div class="input string optional company_information_resp_cpf"><label class="string optional" for="company_information_attributes_resp_cpf">CPF do responsável</label><input class="string optional form-control" placeholder="Caso pessoa Jurídica" type="text" value="" name="company[information_attributes][resp_cpf]" id="company_information_attributes_resp_cpf" /></div>
            </div>
          </div>

          <div class="form-group" style="border:none;">
            <div class="col-sm-3">
              <div class="input string required company_information_cep"><label class="string required" for="cep"><abbr title="obrigatório">*</abbr> CEP</label><input class="string required form-control" id="cep" type="text" value="" name="company[information_attributes][cep]" /></div>
            </div>
            <div class="col-sm-4">
              <div class="input string required company_information_street"><label class="string required" for="company_information_attributes_street"><abbr title="obrigatório">*</abbr> Rua</label><input class="string required form-control" data_cep="logradouro" type="text" value="" name="company[information_attributes][street]" id="company_information_attributes_street" /></div>
            </div>
            <div class="col-sm-1">
              <div class="input string required company_information_number"><label class="string required" for="company_information_attributes_number"><abbr title="obrigatório">*</abbr> No.</label><input class="string required form-control" type="text" value="" name="company[information_attributes][number]" id="company_information_attributes_number" /></div>
            </div>
            <div class="col-sm-4">
              <div class="input string required company_information_neighborhood"><label class="string required" for="company_information_attributes_neighborhood"><abbr title="obrigatório">*</abbr> Bairro</label><input class="string required form-control" data_cep="" type="text" value="" name="company[information_attributes][neighborhood]" id="company_information_attributes_neighborhood" /></div>
            </div>
          </div>

          <div class="form-group" style="border:none;">
            <div class="col-sm-4">
              <div class="input string required company_information_city"><label class="string required" for="company_information_attributes_city"><abbr title="obrigatório">*</abbr> Cidade</label><input class="string required form-control" data_cep="cidade" type="text" value="" name="company[information_attributes][city]" id="company_information_attributes_city" /></div>
            </div>
            <div class="col-sm-2">
              <div class="input string required company_information_state"><label class="string required" for="company_information_attributes_state"><abbr title="obrigatório">*</abbr> UF</label><input class="string required form-control" data_cep="uf" type="text" value="" name="company[information_attributes][state]" id="company_information_attributes_state" /></div>
            </div>
            <div class="col-lg-2">
              <div class="input tel optional company_information_phone"><label class="tel optional" for="company_information_attributes_phone">Telefone</label><input class="string tel optional form-control phone" type="tel" value="" name="company[information_attributes][phone]" id="company_information_attributes_phone" /></div>
            </div>
            <div class="col-sm-3">
            </div>
          </div>

          <h4 class="mb">
            <i class="fa fa-angle-right"></i> Informações bancárias
          </h4>

          <div class="alert alert-info">
            Importante! Para que você receba seu código de indicação, e comece a ganhar atráves dele, é necessário
            que você preencha todas as informações abaixo, e realize os pagamento de suas faturas.<br>
            <b>O processo de verificação das informações será processado pela Talento TV e poderá demorar até 48h.</b>
            <br><br>
            Preenchimento Banco/Conta
            <ul>
              <li>Banco do Brasil	9999-D	99999999-D</li>
              <li>Santander	9999	99999999-D</li>
              <li>Caixa Econômica	9999	XXX99999999-D (X: Operação)</li>
              <li>Bradesco	9999-D	9999999-D</li>
              <li>Itaú	9999	99999-D</li>
            </ul>
          </div>

          <div class="form-group" style="border:none;">
            <div class="col-lg-2">
              <div class="input select optional company_information_bank"><label class="select optional" for="company_information_attributes_bank">Banco</label><select class="select optional form-control" name="company[information_attributes][bank]" id="company_information_attributes_bank"><option value="">Selecione</option>
<option value="Itaú">Itaú</option>
<option selected="selected" value="Bradesco">Bradesco</option>
<option value="Caixa Econômica">Caixa Econômica</option>
<option value="Banco do Brasil">Banco do Brasil</option>
<option value="Santander">Santander</option></select></div>
            </div>
            <div class="col-lg-2">
              <div class="input string optional company_information_bank_ag"><label class="string optional" for="company_information_attributes_bank_ag">Agência</label><input class="string optional form-control" type="text" value="" name="company[information_attributes][bank_ag]" id="company_information_attributes_bank_ag" /></div>
            </div>
            <div class="col-lg-2">
              <div class="input select optional company_information_account_type"><label class="select optional" for="company_information_attributes_account_type">Tipo da conta</label><select class="select optional form-control" name="company[information_attributes][account_type]" id="company_information_attributes_account_type"><option value="">Selecione</option>
<option selected="selected" value="Corrente">Corrente</option>
<option value="Poupança">Poupança</option></select></div>
            </div>
            <div class="col-lg-3">
              <div class="input string optional company_information_bank_cc"><label class="string optional" for="company_information_attributes_bank_cc">Número da conta</label><input class="string optional form-control" type="text" value="" name="company[information_attributes][bank_cc]" id="company_information_attributes_bank_cc" /></div>
            </div>
            <div class="col-lg-3">
            </div>
          </div>
<input type="hidden" value="3" name="company[information_attributes][id]" id="company_information_attributes_id" />
        <hr>

        <div class="btn-group">
          <a class="btn btn-default" href="adduser.php">&lt; Voltar</a>
          <a class="btn btn-danger" data-confirm="Tem certeza?" rel="nofollow" data-method="post" href="#">Suspender conta</a>
          <a  href="#" class="btn btn btn-success" />Atualizar</a>
        </div>
</form>    </div>
  </div>
</div>


  </section>
</section>



<?php
require "includes/footer1.php";
?>

