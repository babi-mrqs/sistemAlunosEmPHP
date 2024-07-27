<?php
    require_once 'DAL/gradeDAO.php';

    class notaModel {
        public ?int $idGrade;
        public ?int $idUser;
        public ?int $idSubject;
        public ?float $value;

        public function __construct(?int $idGrade = null, ?int $idUser = null, ?int $idSubject = null,  ?float $value = null) {
            $this->idGrade = $idGrade;
            $this->idU$idUser = $idUser;
            $this->idS$idSubject = $idSubject;
            $this->value = $value;
        }
    }
?>