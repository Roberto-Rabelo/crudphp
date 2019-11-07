 <table class="table">
    <thead>
        <tr>
            <th scope="col" >ID</th>
            <th scope="col" >NOME</th>
            <th scope="col" >TELEFONE</th>
            <th scope="col" >EMAIL</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($lista as $cliente) {?>
        <tr>
            <th scope="row" ><?php echo $cliente['idcliente'] ?></th>
            <td><?php echo $cliente['nome'] ?></td>
            <td><?php echo $cliente['telefone'] ?></td>
            <td><?php echo $cliente['email'] ?></td>
        </tr>
        <?php }?>
    </tbody>
</table>