<?php
    require "includes/header.php";
?>
<body>
        

        <h4 style="text-align: center; text-transform: uppercase; color: #B3B3B3;">Faça seu cadastro</h4>
        <div class="input string required user_full_name"><label class="string required" for="user_full_name"><abbr title="obrigatório">*</abbr> Nome da empresa</label><input class="string required form-control" autofocus="autofocus" placeholder="Nome da Empresa/Nome completo" type="text" name="user[full_name]" id="user_full_name" /></div>
        <br>
        <div class="input email optional user_email"><label class="email optional" for="user_email">E-mail</label><input class="string email optional form-control" autofocus="autofocus" placeholder="E-mail" type="email" value="" name="user[email]" id="user_email" /></div>
        <div class="input hidden user_type"><input value="Company" class="hidden" type="hidden" name="user[type]" id="user_type" /></div>
        <br>
        <div class="input string optional user_indication_code"><label class="string optional" for="user_indication_code">Código de indicação</label><input class="string optional form-control" placeholder="Você possui um código de indicação?" type="text" name="user[indication_code]" id="user_indication_code" /></div>
        <br>
        <div class="input password optional user_password"><label class="password optional" for="user_password">Senha</label><input class="password optional form-control" placeholder="Senha" type="password" name="user[password]" id="user_password" /></div>
        <br>
        <div class="input password optional user_password_confirmation"><label class="password optional" for="user_password_confirmation">Confirmação da senha</label><input class="password optional form-control" placeholder="Confirmar senha" type="password" name="user[password_confirmation]" id="user_password_confirmation" /></div>
        <br>
        <small>Clicando em cadastrar, você está aceitando nossos <a data-toggle="modal" data-target="#terms" href="#">termos de uso</a>.</small>
        <br>
        <br>
        <input type="submit" name="commit" value="Cadastrar" class="btn btn-theme btn-block" />

        <hr>

        <div class="registration">
          Já possui uma conta?<br/>
          <a href="entrar.php">Fazer login</a>
        </div>
      </div>
</form>  </div>
</div>

<div class="modal fade" id="terms" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <h4 class="modal-title" id="myModalLabel">Termos de Uso</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
         </div>
      <div class="modal-body">
        <p><p>logo mais no ar...</p>
<br /><p> </p>
<br /><p> </p>
<br /><p> </p>
<br /><p> </p></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>



    </section>
<?php
require "includes/footer.php";
?>
  </body>
  

<!-- Mirrored from fopon.com.br/usuario/cadastrar by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Jun 2018 16:49:48 GMT -->
</html>
