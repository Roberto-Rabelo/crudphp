<table class="table">
    <thead>
        <tr>
            <th scope="col" >ID</th>
            <th scope="col" >NOME</th>
            <th scope="col" >EMAIL</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($lista as $departamento) {?> 
        <tr>
            <th scope="row" ><?php echo $departamento['iddepartamento'] ?></th>
            <td><?php echo $departamento['nome'] ?></td>
            <td><?php echo $departamento['email'] ?></td> 
        </tr>
        
        <?php }?>
    </tbody>
</table>