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
    session_start();

    // if ($_SESSION['logged'] !== true || $_SESSION['id_tipo_usuario'] !== 1) {
    //     header('Location: login.php');
    //     exit();
    // }
?> 


<body>
    <header>        
        
        <h1 style="margin-top:2%; margin-left: 39%;margin-bottom:2%" >Cadastrar Matéria</h1>
    </header>
    <main >
        <div style = "background-color:#6b6b6b; border-radius: 2%; width:50%"  class="container-sm">
            <form  action="../routers/subjectRouter.php" method="post" >
                <label class="form-label" for="description" style="font-family:sans;font-weight: bold;font-size:125%" >Nome Matéria: </label>
                <br>
                <input class="form-control" type="text" name="description" id="description" placeholder="Digite o nome da matéria" required>
                <br>
                <input type="hidden" name="rota" id="rota" value="register">
                <input class="btn btn-primary" type="submit" value="Cadastrar" style="width: 30%;margin-left: 35%;cursor: pointer;font-family:sans;" >
            </form>
            <br>
        </div>
    </main>
</body>
</html>

