<table class="table">
    <thead>
        <tr>
            <th scope="col" style="background-color:grey" >ID</th>
            <th scope="col" style="background-color:grey" >NOME</th>
            <th scope="col" style="background-color:grey">PREÇO</th>
            <th scope="col" style="background-color:grey">DESCRIÇÃO</th>
            <th scope="col" style="background-color:grey" >DEPARTAMENTO</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($lista as $produto) {?> 
        <tr>
            <th scope="row" ><?php echo $produto['idproduto'] ?></th>
            <td><?php echo $produto['nome'] ?></td>
            <td>R$ <?php echo number_format($produto['preco'],2,",","."); ?></td>
            <td><?php echo $produto['descricao'] ?></td>
            <td><?php echo $produto['departamento'] ?></td> 
        </tr>
        
        <?php }?>
    </tbody>
</table>