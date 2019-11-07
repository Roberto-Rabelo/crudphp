<form class="form-horizontal" method="POST" action="crtl-cliente-cadastro.php">
<fieldset>

<!-- Form Name -->
<legend>Form Name</legend>

<!-- Text input-->
<div class="form-group" >
  <label class="col-md-4 control-label" for="textinput">Nome</label>  
  <div class="col-md-4">
  <input id="textinput" name="nome" type="text" placeholder="João da silva" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Telefone</label>  
  <div class="col-md-4">
  <input id="textinput" name="telefone" type="text" placeholder="(11)1254-12154" class="form-control input-md" >
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Email</label>  
  <div class="col-md-4">
  <input id="textinput" name="email" type="text" placeholder="Exmeplo@exemplo.com.br" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">CPF</label>  
  <div class="col-md-4">
  <input id="textinput" name="cpf" type="text" placeholder="184.154.125-96" class="form-control input-md" >
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Endereço</label>  
  <div class="col-md-4">
  <input id="textinput" name="rua" type="text" placeholder="Rua..Av..Estra" class="form-control input-md" >
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput"></label>  
  <div class="col-md-4">
  <input id="textinput" name="complemento" type="text" placeholder="Casa-Fundos-condomínio-andar" class="form-control input-md">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Bairro</label>  
  <div class="col-md-4">
  <input id="textinput" name="bairro" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->

  <div class="form-group">
  
    <label class="col-md-4 control-label" for="textinput">CEP</label>  
    <div class="col-md-2">
    <input id="textinput" name="cep" type="text" placeholder="2703-5454" class="form-control input-md">
      
    </div>
    
    <label class="col-md-4 control-label" for="selectbasic" style="margin-right:0;">UF</label>
    <div class="col-md-2">
      <select id="selectbasic" name="uf" class="form-control">
        <option value="RJ">RJ</option>
        <option value="SP">SP</option>
        <option value="MG">MG</option>
        <option value="BR">BH</option>
        <option value="PE">PE</option>
      </select>
    </div>
    
  </div>

  <!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Efetuar Cadastro</button>
  </div>
</div>



</fieldset>
</form>