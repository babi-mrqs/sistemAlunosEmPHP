<!DOCTYPE html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<html lang="pt-br">

<!-- APENAS COPIA E COLA, REVISAR TUDO !! -->

<head>    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Matéria</title>
    <script type="text/javascript" src="../public/javascript/script.js"></script>
</head>
<?php
    require_once '../models/userModel.php';
    require_once '../models/subjectModel.php';

    session_start();

    if ($_SESSION['logged'] !== true || $_SESSION['idTypeUser'] != 1) {
        header('Location: login.php');
        exit();
    }

    $subjectModel = new subjectModel();

    $idSubject = intval($_GET['idSubject']);

    $subject = $userModel->sear($idSubject);
    
?>


<body>
    <header>        
        <?php require_once './admin.php'; ?>
        <h1 style="margin-top:2%; margin-left: 39%;margin-bottom:2%" >Editar Materia</h1>
    </header>
    <main >
        <div style = "background-color:#6b6b6b; border-radius: 2%; width:50%"  class="container-sm">
            <form  action="../routers/subjectRouter.php" method="post">
                <input type="hidden" name="idSubject" id="idSubject" value="<?= $subject->idSubject; ?>">
                <label class="form-label" for="name" style="font-family:sans;font-weight: bold;font-size:125%" >Nome Matéria: </label>
                <br>
                <input class="form-control" type="text" name="description" id="description" value="<?= $subject->descriptionSubject;?>" required>
                <br>
                <input type="hidden" name="rota" id="rota" value="update">
                <input class="btn btn-primary" type="submit" value="Atualizar Matéria" style="width: 30%;margin-left: 35%;cursor: pointer;font-family:sans;" >
            </form>
            <br>
        </div>
    </main>
</body>
</html>