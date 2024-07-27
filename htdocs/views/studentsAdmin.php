<!DOCTYPE html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Alunos </title>
</head>
<body>
    <header>
        <?php
            require_once '../models/userModel.php';

            session_start();

            $userModel = new userModel();

            $user = $userModel->searchStudent();
            
            if ($_SESSION['idTypeUser'] == 2) {
                header('Location: ./main.php');
            }
        ?>

        <br><br>

        <div class='container-sm' style="display: flex; align-items: center; justify-content: center; background-color: #f5f4f2;" >
            <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./admin.php">Página Inicial</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./gradesAdmin.php">Materias</a>
            </li>
            </ul>
        </div>
    </header>

    <main>
        <br><br>

        
        <h3 style="display: flex; align-items: center; justify-content: center;" >Tabela de Alunos</h3>

        <a class="btn btn-primary" style="margin-left: 80%;" href="./newUser.php" >Cadastrar Aluno</a>
        <br>

            <div style="margin-left:15%; margin-right:15%" >
                <table class="table" >
                    <thead>
                        <tr> 
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">  </th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- exibir nome e email dos alunos
                        coluna final com botão para excluir ou editar aluno -->
                        <?php foreach ($user as $user) :?>
                            <tr>
                                <td><?= $user->name?></td>
                                <td><?= $user->email?></td>
                                <td>
                                    <a href="./updateUser.php?idUser=<?php echo $user->idUser; ?>" class="btn btn-primary">Editar</a>
                                </td>
                                <td>
                                    <form action="../routers/userRouter.php" method="post" >
                                        <input type="hidden" name="idUser" id="idUser" value="<?= $user->idUser; ?>">
                                        <input type="hidden" name="rota" id="rota" value="delete">
                                        <input class="btn btn-danger" type="submit" value="Excluir"></input>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>  
    </main>