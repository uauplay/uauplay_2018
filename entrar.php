<?php
    require "includes/header.php";
?>
<body>

        <h4 style="text-align: center; text-transform: uppercase; color: #B3B3B3;">Faça seu login</h4>
        <div class="mobi-div">
          <div class="input boolean optional user_mobi"><input value="false" type="hidden" name="user[mobi]" /></label></div>
        </div>
        <div class="input email optional user_email"><label class="email optional" for="user_email">E-mail</label><input class="string email optional form-control" autofocus="autofocus" placeholder="E-mail" type="email" value="" name="user[email]" id="user_email" /></div>
        <br>
        <div class="input password optional user_password"><label class="password optional" for="user_password">Senha</label><input class="password optional form-control" placeholder="Senha" type="password" name="user[password]" id="user_password" /></div>

        <label class="checkbox">
          <span class="pull-right">
            <a data-toggle="modal" href="#myModal"> Esqueceu sua senha?</a>
          </span>
        </label>

        <input type="submit" name="commit" value="Entrar" class="btn btn-default btn-block" />

        <hr>

        <div class="registration">
          Ainda não possui uma conta?<br/>
          <a href="cadastrar.php">Criar uma conta</a>
        </div>
      </div>
</form>    <!-- Modal -->
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
          <h4 class="modal-title">Esqueceu sua senha ?</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                     </div>
          <form novalidate="novalidate" class="simple_form new_user" id="new_user" action="https://fopon.com.br/usuario/senha" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="authenticity_token" value="vf+RUM5sqO3xTN1KyRn8M96Nm16LzjeB0ifIIshLOc1IDxlYlbIS6uJSgT8zdtzrgKrphIajP9F9ZlCdm3bOaA==" />
            <div class="modal-body">
              <p>Digite seu email abaixo para redefinir sua senha.</p>
              <div class="input email required user_email"><label class="email required" for="user_email"><abbr title="obrigatório">*</abbr> E-mail</label><input class="string email required form-control placeholder-no-fix" placeholder="E-mail" type="email" value="" name="user[email]" id="user_email" /></div>
            </div>
            <div class="modal-footer">
              <button data-dismiss="modal" class="btn btn-default" type="button">Cancelar</button>
              <input type="submit" name="commit" value="Envie-me instruções para redefinir minha senha" class="btn btn btn-theme" />
            </div>
</form>        </div>
      </div>
    </div>
    <!-- modal -->
  </div>
</div>


    </section>
<?php
require "includes/footer.php";
?>

  </body>

<!-- Mirrored from fopon.com.br/usuario/entrar by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Jun 2018 16:49:43 GMT -->
</html>
