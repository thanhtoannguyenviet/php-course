<?php 
    class User
    {
        // properties that belong to a class
        private $name;
        private $email;
        private $age;
        private $password;

        // constructor: function that runs when an object
        public function __construct(){
            echo "constructor start<br>";
        }
        public function set_name($name){
            $this->name = $name;
        }
        public function get_name() {
            return $this->name;
        }
        public function set_email($email){
            $this->email = $email;
        }
        public function get_email() {
            return $this->email;
        }
        public function set_age($age){
            $this->age = $age;
        }
        public function get_age() {
            return $this->age;
        }
        public function set_password($password){
            $this->password = $password;
        }
        public function get_password() {
            return $this->password;
        }
    }
    
?>