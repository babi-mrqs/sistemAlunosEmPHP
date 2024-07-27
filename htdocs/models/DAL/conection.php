<?php
    class conection {
        public PDO $conection;

        public function __construct() {
            $this->conection = new PDO('mysql:host=localhost;dbname=db_escola', 'root', '');
        }

        public function getConection() {
            return $this->conection;
        }
    }
?>