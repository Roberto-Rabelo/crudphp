<table class="table">
    <thead>
        <tr>
            <th scope="col" >ID</th>
            <th scope="col" >NOME</th>
            <th scope="col" >LOGIN</th>
            <th scope="col" >SENHA</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($lista as $usuario) {?>
        <tr>
            <th scope="row" ><?php echo $usuario['idusuario'] ?></th>
            <td><?php echo $usuario['nome'] ?></td>
            <td><?php echo $usuario['login'] ?></td>
            <td><?php echo $usuario['senha'] ?></td>
        </tr>
        <?php }?>
    </tbody>
</table>