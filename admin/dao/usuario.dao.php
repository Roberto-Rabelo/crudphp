<?php
    class DAOUsuario{
        public function cadastrar(Usuario $usuario){
            $sql = "INSERT INTO usuario VALUES (default, :login, :senha, :nome)";
            
            $con = Conexao::getInstance()->prepare($sql);
            $con->bindValue(":nome", $usuario->getNome());
            $con->bindValue(":login", $usuario->getLogin());
            $con->bindValue(":senha", $usuario->getSenha());
            $con->execute();

            return "USUÁRIO SALVO COM SUCESSO";
        }
        public function listarUsuario(){
            $sql = "SELECT * FROM usuario";
            $con = Conexao:: getInstance() -> prepare($sql);
            $con -> execute();

            $lista = array();

            while($usuario = $con->fetch(PDO::FETCH_ASSOC)){
                $lista[] = $usuario;
            }

            return $lista;
        }
        public function buscarPorId($id){
            $sql = "SELECT * FROM usuario WHERE idusuario = :idusuario";
            $con = Conexao:: getInstance() -> prepare($sql);
            $con -> bindValue(":idusuario", $id);

            $con -> execute();

            $usuario = new Usuario();
            $usuario = $con->fetch(PDO::FETCH_ASSOC);
    


            return $usuario;
        }
    }
?>


