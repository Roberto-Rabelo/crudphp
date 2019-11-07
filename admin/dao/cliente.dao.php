<?php
    


    class DAOCliente{
        public function cadastrar(Cliente $cliente){
            $sql = "INSERT INTO clienten
                VALUES (default, :nome, :telefone, :email, :cpf, :rua,:complemento, :cep, :uf, :bairro)";

            $con = Conexao::getInstance()->prepare($sql);
            $con->bindValue(":nome", $cliente->getNome());
            $con->bindValue(":telefone", $cliente->getTelefone());
            $con->bindValue(":email", $cliente->getEmail());
            $con->bindValue(":cpf", $cliente->getCpf());
            $con->bindValue(":rua", $cliente->getRua());
            $con->bindValue(":complemento", $cliente->getComplemento());
            $con->bindValue(":cep", $cliente->getCep());
            $con->bindValue(":uf", $cliente->getUf());
            $con->bindValue(":bairro", $cliente->getBairro());

            $con->execute();

            return "Cadastrado com sucesso";
        }
        public function listarCliente(){
            $sql = "SELECT * FROM clienten";
            $con = Conexao:: getInstance() -> prepare($sql);
            $con -> execute();

            $lista = array();

            while($cliente = $con->fetch(PDO::FETCH_ASSOC)){
                $lista[] = $cliente;
            }

            return $lista;
        }

        public function buscarPorId($id){
            $sql = "SELECT * FROM clienten WHERE idcliente = :idcliente";
            $con = Conexao:: getInstance() -> prepare($sql);
            $con -> bindValue(":idcliente", $id);

            $con -> execute();

            $cliente = new Cliente();
            $cliente = $con->fetch(PDO::FETCH_ASSOC);
            //print_r($cliente); //testar saida


            return $cliente;
        }
    
    }

        
?>


