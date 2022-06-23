<?php
    class Admin {
        private $username;
        private $email;
        private $password;


        public function __construct($username, $email, $password) {
            $this->username = $username;
            $this->email = $email;
            $this->password = $password;
        }


        public function get_username() {
            return $this->username;
        }

        public function get_email() {
            return $this->email;
        }

        public function get_password() {
            return $this->password;
        }

        
        public function set_username($username) {
            $this->username = $username;
        }

        public function set_email($email) {
            $this->email = $email;
        }

        public function set_password($password) {
            $this->password = $password;
        }
    }
?>