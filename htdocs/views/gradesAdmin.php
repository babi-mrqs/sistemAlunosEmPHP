<!DOCTYPE html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Matérias </title>
</head>
<body>
    <br><br>
    <?php
        require_once '../models/subjectsModel.php';

        session_start();

        $subjectModel = new subjectModel();
        $subjects = $subjectModel->searchSubject();
        
        if ($_SESSION['idTypeUser'] == 2) {
            header('Location: ./main.php');
        }
    ?>


    <div class='container-sm' style="display: flex; align-items: center; justify-content: center; background-color: #f5f4f2;" >
        <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./admin.php">Página Inicial</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./studentsAdmin.php">Alunos</a>
        </li>
        </ul>
    </div>

    <br><br>

    <div class="container-sm">
        <h2>Tabela de Matérias</h2>
        <a class="btn btn-primary" style="margin-left: 80%;" href="./newSubject.php" >Cadastrar Matéria</a>
        <br>
        <table class="table">
            <thead>
                <tr> 
                    <th scope="col">Matérias</th>
                    <th> </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <!-- exibir matérias
                    coluna final com botão para excluir ou editar materia -->
                    <?php foreach ($subjects as $subject) :?>
                            <tr>
                                <td><?= $subject->description?></td>
                                <td>
                                    <a href="./updateSubject.php?idSubject=<?php echo $subject->idSubject; ?>" class="btn btn-primary">Editar</a>
                                </td>
                                <td>
                                    <form action="../routers/subjectRouter.php" method="post" >
                                        <input type="hidden" name="idSubject" id="idSubject" value="<?= $subject->idSubject; ?>">
                                        <input type="hidden" name="rota" id="rota" value="delete">
                                        <input class="btn btn-danger" type="submit" value="Excluir"></input>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                </tr>
            </tbody>
        </table>
    </div>

