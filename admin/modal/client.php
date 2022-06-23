<?php
    class Client {
        private $username;
        private $email;
        private $id_service;

        public function __construct($username, $email, $id_service) {
            $this->username = $username;
            $this->email = $email;
            $this->id_service = $id_service;
        }

        public function get_username() {
            return $this->username;
        }

        public function get_email() {
            return $this->email;
        }

        public function get_id_service() {
            return $this->id_service;
        }

        public function set_username($username) {
            $this->username = $username;
        }

        public function set_email($email) {
            $this->email = $email;
        }

        public function set_id_service($id_service) {
            $this->id_service = $id_service;
        }
    }
    
?>