<?php
    


    class DAODepartamento{
        public function cadastrar(Departamento $departamento){
            $sql = "INSERT INTO departamento VALUES (default, :nome, :email)";
            
            $con = Conexao::getInstance()->prepare($sql);
            $con->bindValue(":nome", $departamento->getNome());
            $con->bindValue(":email", $departamento->getEmail());
            
            $con->execute();

            return "DEPARTAMENTO SALVO COM SUCESSO";
        }
        public function listarDepartamento(){
            $sql = "SELECT * FROM departamento ";
            $con = Conexao:: getInstance()-> prepare($sql);
            $con -> execute();

            $lista = array();

            while($departamento = $con->fetch(PDO::FETCH_ASSOC)){
                $lista[] = $departamento;
            }

            return $lista;
        }
    }
?>


