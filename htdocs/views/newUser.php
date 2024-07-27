<!DOCTYPE html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<html lang="pt-br">

<!-- cadastro ok -->

<head>    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Aluno</title>
    <script type="text/javascript" src="../public/javascript/script.js"></script>
</head>
<?php
    //  session_start();

    //  if ($_SESSION['logged'] !== true || $_SESSION['id_tipo_usuario'] !== 1) {
    //      header('Location: login.php');
    //      exit();
    //  }
?> 


<body>
    <header>        
        
        <h1 style="margin-top:2%; margin-left: 39%;margin-bottom:2%" >Cadastrar Aluno</h1>
    </header>
    <main >
        <div style = "background-color:#6b6b6b; border-radius: 2%; width:50%"  class="container-sm">
            <form  action="../routers/userRouter.php" method="post" onsubmit="return validateNewUser(event);">
                <label class="form-label" for="name" style="font-family:sans;font-weight: bold;font-size:125%" >Nome: </label>
                <br>
                <input class="form-control" type="text" name="name" id="name" placeholder="Digite o nome" required>
                <br>
                <label class="form-label" for="email" style="font-family:sans;font-weight: bold;font-size:125%" >E-mail: </label>
                <br>
                <input class="form-control" type="email" name="email" id="email" placeholder="Digite o email" required>
                <br>
                <label class="form-label" for="password" style="font-family:sans;font-weight: bold;font-size: 125%;">Senha: </label>
                <br>
                <input class="form-control" type="password" name="password" id="password" placeholder="Crie a senha" required>
                <br>
                <br>
                <input type="hidden" name="rota" id="rota" value="register">
                <input class="btn btn-primary" type="submit" value="Cadastrar" style="width: 30%;margin-left: 35%;cursor: pointer;font-family:sans;" >
            </form>
            <br>
        </div>
    </main>
</body>
</html>

<!-- Adicionar para cadastrar professor também

<select name="idTypeUser" id="idTypeUser" class="form-control" value="<?= $user->idTypeUser ?>">
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select> -->