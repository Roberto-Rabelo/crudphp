<?php
    class DAOProduto{
    public function cadastrar(Produto $produto){ //sintaxe classe e variavel
            $sql = "INSERT INTO produto VALUES (default, :nome, :preco, :descricao, :departamento)";
            
            $con = Conexao::getInstance()->prepare($sql);
            $con->bindValue(":nome", $produto->getNome());
            $con->bindValue(":preco", $produto->getPreco());
            $con->bindValue(":descricao", $produto->getDescricao());
            $con->bindValue(":departamento", $produto->getDepartamento()->getId()); //departamento pega id 
            $con->execute();

            return "PRODUTO SALVO COM SUCESSO";
        }
        // SINTAXE INNER JOIN
        // JUNTANDO DUAS TABELAS
        //SELECT * FROM tabela1 INNER JOIN tabela2 on tabela1.fk_tabela1 = tabela2.pk_tabela2
        //-------
        // TRAZENDO APENAS UM CAMPO
        //SELECT
        //produto.nome,
        //produto.preco,
        //produto.descricao,
        //departamento.nome as 'departamento'
        //FROM produto
        //INNER JOIN departamento
        //ON produto.fk_departamento_produto = departamento.iddepartamento
        public function listarProduto(){
            $sql = "SELECT
            produto.idproduto,
            produto.nome,
            produto.preco,
            produto.descricao,
            departamento.nome as 'departamento'
            
            FROM produto
            INNER JOIN departamento
            ON produto.fk_departamento_produto = departamento.iddepartamento" ;
            
            $con = Conexao:: getInstance() -> prepare($sql);
            $con -> execute();

            $lista = array();

            while($produto = $con->fetch(PDO::FETCH_ASSOC)){
                $lista[] = $produto;
            }

            return $lista;
        }
    }
?>