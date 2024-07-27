<?php
    require_once '../models/subjectsModel.php';

    
    class subjectController{
        //cadastrar matéria
        public function registerSubject(string $description) {
            $subjectModel = new subjectModel();
            $subject = new subjectModel(null, $description);

            $return = $subjectModel->registerSubject($subject);

            if ($return) {
                header('Location: ../views/gradesAdmin.php');
            }
            else {
                header('Location: ../views/admin.php');
            }

            exit();
        }

        //atualizar materia
        public function updateSubject(int $idSubject, string $description) {
            $subjectModel = new subjectModel();

            $subject = $subjectModel($idSubject, $description);

            $return = $subjectModel - updateSubject($subject);

            if ($return) {
                header('Location: ../views/gradesAdmin.php');
            }
            else {
                header("Location: ../views/updateSubject.php?idSubject=$idSubject");
            }

            exit();
        }


        //excluir matéria
        public function deleteSubject(int $idSubject) {
            $subjectModel = new subjectModel();

            $subjectModel->deleteSubject($idSubject);

            header('Location: ../views/gradesAdmin.php');
            exit();
        }

    }

?>