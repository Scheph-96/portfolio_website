<?php
    class Appointement {
        private $idRdv;
        private $username;
        private $email;
        private $service;
        private $seen;
        private $date;


        public function __construct($idRdv, $username, $email, $service, $seen, $date) {
            $this->idRdv = $idRdv;
            $this->username = $username;
            $this->email = $email;
            $this->service = $service;
            $this->seen = $seen;
            $this->date = $date;
        }


        public function get_idRdv() {
            return $this->idRdv;
        }


        public function get_username() {
            return $this->username;
        }

        public function get_email() {
            return $this->email;
        }

        public function get_service() {
            return $this->service;
        }

        public function get_seen() {
            return $this->seen;
        }

        public function get_date() {
            return $this->date;
        }


        public function set_idRdv($idRdv) {
            $this->idRdv = $idRdv;
        }


        public function set_username($username) {
            $this->username = $username;
        }

        public function set_email($email) {
            $this->email = $email;
        }

        public function set_service($service) {
            $this->service = $service;
        }

        public function set_seen($seen) {
            $this->seen = $seen;
        }

        public function set_date($date) {
            $this->date = $date;
        }
    }
    
?>