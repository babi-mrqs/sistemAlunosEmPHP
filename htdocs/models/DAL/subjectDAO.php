<?php
require_once 'conection.php';

class subjectDAO{

    //buscar matérias
    public function searchSubject() {
        $conection = (new conection())->getConection();

        $sql = "SELECT * FROM subject ORDER BY descriptionSubject;";

        $stmt = $conection->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function registerSubject(subjectModel $subject) {
        $conection = (new conection())->getConection();

        $sql = "INSERT INTO subject VALUES(null, :description);";

        $stmt = $conection->prepare($sql);
        $stmt->bindParam(':description', $subject->description);
        return $stmt->execute();
    }

     //função para buscar o id da matéria para excluir/editar
     public function searchSubjectById(int $idSubject) {
        $conection = (new conection())->getConection();

        $sql = "SELECT idSubject, descriptionSubject FROM subject WHERE idSubject = :idSubject;";

        $stmt = $conection->prepare($sql);
        $stmt->bindParam(':idSubject', $idSubject);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    //função para editar
    public function updateSubject(subjectModel $subject) {
        $conection = (new conection())->getConection();

        $sql = "UPDATE subject SET descriptionSubject = :description WHERE idSubject = :idSubject;";

        $stmt = $conection->prepare($sql);
        $stmt->bindValue(':description', $subject->description);
        $stmt->bindValue(':idSubject', $subject->idSubject);

        return $stmt->execute();
    }

    //função para excluir
    public function deleteSubject(int $idSubject) {
        $conection = (new conection())->getConection();

        $sql = "DELETE FROM subject WHERE idSubject = :idSubject";

        $stmt = $conection->prepare($sql);
        $stmt->bindValue(':idSubject', $idsubject);
        return  $stmt->execute();
    }



}


?>