<?php
    class Service {
        private $idService;
        private $libelle;
        private $dateCreation;


        public function __construct($idService, $libelle, $dateCreation) {
            $this->idService = $idService;
            $this->libelle = $libelle;
            $this->dateCreation = $dateCreation;
        }


        public function get_idService() {
            return $this->idService;
        }

        public function get_libelle() {
            return $this->libelle;
        }

        public function get_dateCreation() {
            return $this->dateCreation;
        }


        public function set_idService($idService) {
            $this->idService = $idService;
        }

        public function set_libelle($libelle) {
            $this->libelle = $libelle;
        }

        public function set_dateCreation($dateCreation) {
            $this->dateCreation = $dateCreation;
        }
    }
?>