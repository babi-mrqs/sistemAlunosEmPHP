<?php
    require_once '../controllers/subjectController.php';

    $subjectController = new subjectController();

    $rota = $_POST['rota'];

    switch($rota) {
        case 'register':
            $description = $_POST['description'];

            $subjectController->registerSubject($description);

            break;
        case 'update' :
            $idSubject = intval($_POST['idSubject']);
            $description = $_POST['description'];

            var_dump($subjectController->updateSubject($idSubject, $description));
            break;
        case 'delete':
            $idSubject = intval($_POST["idSubject"]);

            $subjectController->deleteSubject($idSubject);
            
            break;
    }

?>