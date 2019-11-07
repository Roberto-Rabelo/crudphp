<table class="table">
    <thead>
        <tr>
            <th scope="col" style="background-color:grey"  >ID</th>
            <th scope="col " style="background-color:grey"  >NOME</th>
            <th scope="col" style="background-color:grey" >CIDADE</th>
            <th scope="col" style="background-color:grey" >ESTADO</th>
            <th scope="col" style="background-color:grey" >CNPJ</th>

        </tr>
    </thead>
    <tbody>
        <?php foreach($lista as $fornecedor) {?> 
        <tr>
            <th scope="row" ><?php echo $fornecedor['idfornecedor'] ?></th>
            <td><?php echo $fornecedor['nome'] ?></td>
            <td><?php echo $fornecedor['cidade'] ?></td> 
            <td><?php echo $fornecedor['estado'] ?></td> 
            <td><?php echo $fornecedor['cnpj'] ?></td>  
        </tr>
        
        <?php }?>
    </tbody>
</table>