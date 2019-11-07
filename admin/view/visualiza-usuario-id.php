<form class="form-horizontal" method="POST" action="" >
<fieldset>

<!-- Form Name -->
<legend>Usuario</legend>

<!-- Text input-->
<div class="form-group" >
  <label class="col-md-4 control-label" for="textinput">Nome</label>  
  <div class="col-md-4">
  <input id="nome" name="nome" value="<?php echo $usuario['nome'];  ?>" type="text" placeholder="João da silva" class="form-control input-md">
    
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">login</label>  
  <div class="col-md-4">
  <input id="login" name="login" value="<?php echo $usuario['login'];  ?>" type="text" placeholder="Exemplo@exemplo.com.br" class="form-control input-md">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">senha</label>  
  <div class="col-md-4">
  <input id="senha" name="senha"   value="<?php echo $usuario['senha'];  ?>"  class="form-control input-md">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Efetuar Cadastro</button>
  </div>
</div>





</fieldset>
</form>