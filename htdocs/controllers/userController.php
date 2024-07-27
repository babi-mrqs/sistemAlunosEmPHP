<?php
    require_once '../models/userModel.php';

    class userController {

        //validar usuario ao logar
        public function validateUser(string $email, string $password) {
            $email = str_replace(' ', '', $email);
            $password = md5(str_replace(' ', '', $password));

            $userModel = new userModel();
            $return = $userModel->searchUserByEmailPassword($email, $password);

            session_start();

            if ($return) {
                $_SESSION['logged'] = true;
                $_SESSION['idTypeUser'] = $return['idTypeUser'];

                if ($return['idTypeUser'] === 1) {
                    header('Location: ../views/admin.php');
                } else {
                    header('Location: ../views/main.php');
                }
            } else {
                header('Location: ../views/login.php');
            }

            exit();
        }
        
        //função de cadastrar usuario
        public function registerUser(string $name, string $email, string $password) {
            $email = str_replace(' ', '', $email);
            $password = md5(str_replace(' ','', $password));

            $userModel = new userModel();
            $return = $userModel->insertUser($name, $email, $password);

            if($return === true) {
                header('Location: ../views/studentsAdmin.php');
            }
            else {
                header('Location: ../views/newUser.php');
            }

            exit();
        }  
        
        
        //função de editar usuario
        public function updateUser(int $idUser, string $name, string $email, string $password) {
            $email = str_replace(' ', '', $email);
            $password = md5(str_replace(' ','', $password));

            $userModel = new userModel();
            $return = $userModel->updateUser($idUser, $name, $email, $password);

            if($return === true) {
                header('Location: ../views/studentAdmin.php');
            }
            else {
                header("Location: ../views/updateUser.php?idUser=$idUser");
            }

            exit();
        }


        //função de excluir usuario
        public function deleteUser(int $idUser) {
            $userModel = new userModel();

            $userModel->deleteUser($idUser);

            header('Location: ../views/studentsAdmin.php');
            exit();
        }


    }
    




?>