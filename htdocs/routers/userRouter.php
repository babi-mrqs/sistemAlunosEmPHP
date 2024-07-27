<?php
    require_once '../controllers/userController.php';

    $userController = new userController();

    $rota = $_POST['rota'];

    switch ($rota) {
        //se a rota passada no input rota for login(função para logar)
        case 'login':
            $email = $_POST['email'];
            $password = $_POST['password'];

            $userController->validateUser($email, $password);

            break;
        //se a rota passada no input rota for register (função cadastrar)
        case 'register':
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $userController->registerUser($name, $email, $password);

            break;
        //se a rota passada no input rota for update (atualiza o user)
        case 'update':
            $idUser = $_POST['idUser'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $userController->updateUser($idUser, $name, $email, $password);

            break;
        //se a rota passada no input rota for delete (exclui user)
        case 'delete':
            $idUser = intval($_POST["idUser"]);

            $userController->deleteUser($idUser);
            
            break;
    }
