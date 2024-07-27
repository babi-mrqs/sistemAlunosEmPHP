<?php
    require_once 'DAL/typeUserDAO.php';

    class tipoUsuarioModel {
        public ?int $idTypeUser;
        public ?string $description;

        public function __construct(?int $idTypeUser = null, ?string $description = null) {
            $this->idTypeUser = $idTypeUser;
            $this->description = $description;
        }
    }
?>