<?php
    class Persona {
        //atributos
        private $email;
        private $password;
        private $edad;
        // constructor
        function __construct($correo,$contra,$edad) {
            $this->email=$correo;
            $this->password=$contra;
            $this->edad=$edad;
        }
        //métodos accesorios
        public function getEmail(){
            return $this->email;
        }
        public function getPassword(){
            return $this->password;
        }
        public function getEdad(){
            return $this->edad;
        }
        //métodos setters
        public function setEdad($edad){
            if ($edad > 200) {
                $this->edad=69;
            } else {
                $this->edad=$edad;
            }
        }
        //métodos propios
        public function mailpass() {
            $result=false;
            if (($this->email == 'djuan@acmarca.com') and ($this->password == "qweQWE123")) {
                echo "Datos introducidos correctos";
                $result=true;
            } 
        }
    }

?>