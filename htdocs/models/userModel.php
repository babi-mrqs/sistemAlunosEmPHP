<?php
    require_once 'DAL/userDAO.php';

    class userModel {
        public ?int $idUser;
        public ?int $idTypeUser;
        public ?string $name;
        public ?string $email;
        public ?string $password;

        public function __construct(?int $idUser = null, ?int $idTypeUser = null, ?string $name = null, ?string $email = null, ?string $password = null) {
            $this->idUser = $idUser;
            $this->idTypeUser = $idTypeUser;
            $this->name = $name;
            $this->email = $email;
            $this->password = $password;
        }
        
        //autenticar usuario ao logar
        public function searchUserByEmailPassword(string $email, string $password){
            $userDAO = new userDAO();
            $return = $userDAO->searchUserByEmailPassword($email, $password);

            return $return;
        }

        //função de cadastrar usuario
        public function insertUser(string $name, string $email, string $password) {
            $userDAO = new userDAO();
            $return = $userDAO->insertUser($name, $email, $password);

            return $return;
        }

        //função de atualizar usuário
        public function updateUser(self $user) {
            $userDAO = new userDAO();

            return $userDAO->updateUser($user);
            
        }

        //função para apagar usuario
        public function deleteUser(int $idUser) {
            $userDAO = new userDAO();
            return $userDAO->deleteUser($idUser);
        }

        //função para buscar usuario por id
        public function searchUserById(int $idUser) {
            $userDAO = new userDAO();

            $user = $userDAO->searchUserById($idUser);

            $user = new userModel(
                $user['idUser'], 
                $user['idTypeUser'],
                $user['nameUser'],
                $user['emailUser'],
                $user['userPassword']
            );
            
            return $user;
        }


        //função para buscar alunos
        public function searchStudent(){
            $userDAO = new userDAO();

            $users = $userDAO->searchStudent();

            foreach ($users as $key => $user) {
                $users[$key] = new userModel(
                    $user['idUser'], 
                    null,
                    $user['nameUser'],
                    $user['emailUser'],
                );
            }
            return $users;
        }


    }
?>