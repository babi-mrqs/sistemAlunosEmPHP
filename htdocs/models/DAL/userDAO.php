<?php
    require_once 'conection.php';

    class userDAO{
        //autenticar usuario ao logar
        public function searchUserByEmailPassword(string $email, string $password){
            $conection = (new conection())->getConection();

            $sql = "SELECT * FROM user WHERE emailUser = :email AND userPassword = :password;";

            $stmt = $conection->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $stmt->execute();
            $return = $stmt->fetch(PDO::FETCH_ASSOC);
            
            return $return;
        }


        //cadastrar usuario
        public function insertUser(string $name, string $email, string $password) {
            $conection = (new conection())->getConection();

            $sql = "INSERT INTO user VALUES(null, :idTypeUser, :name, :email, :password);";

            $stmt = $conection->prepare($sql);
            $stmt->bindValue(':idTypeUser', 2);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $return = $stmt->execute();

            return $return;
        }

        //função para atualizar usuario
        public function updateUser(userModel $user) {
            $conection = (new conection())->getConection();

            $sql = "UPDATE user SET nameUser= :name, emailUser = :email, userPassword = :password
            WHERE idUser = :idUser;";

            $stmt = $conection->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $return = $stmt->execute();

            return $return;

        }

        //função para excluir usuario
        public function deleteUser(int $idUser) {
            $conection = (new conection())->getConection();

            $sql = "DELETE FROM user WHERE iduser = :idUser";

            $stmt = $conection->prepare($sql);
            $stmt->bindValue(':idUser', $idUser);
            return $stmt->execute();
        }


        //função para buscar aluno
        public function searchStudent() {
            $conection = (new conection())->getConection();

            $sql = "SELECT idUser, idTypeUser, nameUser, emailUser FROM user WHERE idTypeUser = 2";

            $stmt = $conection->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        //função para buscar o id do user para excluir/editar
        public function searchUserById(int $idUser) {
            $conection = (new conection())->getConection();

            $sql = "SELECT idUser, idTypeUser, nameUser, emailUser, userPassword FROM user WHERE idUser = :idUser;";

            $stmt = $conection->prepare($sql);
            $stmt->bindParam(':idUser', $idUser);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

 
    }


