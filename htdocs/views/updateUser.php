<!DOCTYPE html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<html lang="pt-br">

<!-- APENAS COPIA E COLA, REVISAR TUDO !! -->

<head>    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Aluno</title>
    <script type="text/javascript" src="../public/javascript/script.js"></script>
</head>
<?php
    require_once '../models/userModel.php';

    session_start();

    if ($_SESSION['logged'] !== true || $_SESSION['idTypeUser'] != 1) {
        header('Location: login.php');
        exit();
    }

    $userModel = new userModel();

    $idUser = intval($_GET['idUser']);

    $user = $userModel->searchUserById($idUser);
    
?>


<body>
    <header>        
        <?php require_once './admin.php'; ?>
        <h1 style="margin-top:2%; margin-left: 39%;margin-bottom:2%" >Editar Aluno</h1>
    </header>
    <main >
        <div style = "background-color:#6b6b6b; border-radius: 2%; width:50%"  class="container-sm">
            <form  action="../routers/userRouter.php" method="post" onsubmit="return validateNewUser(event);">
                <input type="hidden" name="idUser" id="idUser" value="<?= $user->idUser; ?>">
                <label class="form-label" for="name" style="font-family:sans;font-weight: bold;font-size:125%" >Nome: </label>
                <br>
                <input class="form-control" type="text" name="name" id="name" value="<?= $user->name;?>" required>
                <br>
                <label class="form-label" for="email" style="font-family:sans;font-weight: bold;font-size:125%" >E-mail: </label>
                <br>
                <input class="form-control" type="email" name="email" id="email" value="<?= $user->email;?>" required>
                <br>
                <label class="form-label" for="password" style="font-family:sans;font-weight: bold;font-size: 125%;">Senha: </label>
                <br>
                <input class="form-control" type="password" name="password" id="password" value="<?= $user->password;?>" required>
                <br>
                <br>
                <input type="hidden" name="rota" id="rota" value="update">
                <input class="btn btn-primary" type="submit" value="Atualizar Aluno" style="width: 30%;margin-left: 35%;cursor: pointer;font-family:sans;" >
            </form>
            <br>
        </div>
    </main>
</body>
</html>