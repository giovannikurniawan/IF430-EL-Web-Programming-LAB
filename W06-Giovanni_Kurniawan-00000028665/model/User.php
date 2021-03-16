<?php
    class User{
        var $username;
        var $password;
        var $salt;

        function __construct($uname, $pass, $salt) {
            $this->username=$uname;
            $this->password=$pass;
            $this->salt =$salt;
        }

        public function getusername() { return $this->username; }
        public function getpassword() { return $this->password; }
        public function getsalt() { return $this->salt; }

        public function setusername($str) { $this->username=$str; }
        public function setpassword($str) { $this->password=$str; }
        public function setsalt($str) { $this->salt =$str; }
    }
?>