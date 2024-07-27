<?php
    require_once 'DAL/subjectDAO.php';

    class subjectModel {
        public ?int $idSubject;
        public ?string $description;

        public function __construct(?int $idSubject = null, ?string $description = null) {
            $this->idSubject = $idSubject;
            $this->description = $description;
        }
        
        //buscar matérias para listar
        public function searchSubject() {
            $subjectDAO = new subjectDAO();

            $subjects = $subjectDAO->searchSubject();

            foreach ($subjects as $key => $subject) {
                $subjects[$key] = new subjectModel($subject['idSubject'], $subject['descriptionSubject']);
            }

            return $subjects;
        }

        //cadastrar matéria
        public function registerSubject(subjectModel $subject) {
            $subjectDAO = new subjectDAO();

            return $subjectDAO->registerSubject($subject);
        }

        //função para buscar matéria por id
        public function searchSubjectById(int $idSubject) {
            $subjectDAO = new subjectDAO();

            $subject = $subjectDAO->searchSubjectById($idSubject);

            $subject = new subjectModel(
                $subject['idsubject'], 
                $subject['descriptionSubject']
            );
            
            return $subject;
        }

        //atualizar materia
        public function updateSubject(subjectModel $subject) {
            $subjectDAO = new subjectDAO();
            
            return $subjectDAO->updateSubject($subject);
        }


        //excluir matéria
        public function deleteSubject(int $idSubject) {
            $subjectDAO = new subjectDAO();

            return $subjectDAO->deleteSubject($idSubject);
        }
    
    }

?>