<form class="form-horizontal" method="POST" action="cadastrar" >
<fieldset>

<!-- Form Name -->
<legend>Cadastrar Produto</legend>

<!-- Text input-->
<div class="form-group" >
  <label class="col-md-4 control-label" for="textinput">Nome</label>  
  <div class="col-md-4">
  <input id="nome" name="nome" type="text" placeholder="João da silva" class="form-control input-md">
    
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Preço</label>  
  <div class="col-md-4">
  <input id="preco" name="preco" type="text" placeholder="Exemplo@exemplo.com.br" class="form-control input-md">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Descrição</label>  
  <div class="col-md-4">
  <input id="descricao" name="descricao" type="text" placeholder="descricao" class="form-control input-md">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Departamento</label>  
  <div class="col-md-4">
  <select class='form-control input-md' name="departamento" id="">
    <?php foreach($lista as $departamento) {?> 
        <option value="<?php echo $departamento['iddepartamento'] ?>">
        <?php echo $departamento['nome'] ?>
    </option>
    
    <?php }?>
  </select>
    
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