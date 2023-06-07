<?php 

    class admin{

        private $id;
        private $nom;
        private $passw;
        private $numTel;
        private $valid;

        public function __construct($id,$nom,$passw,$numTel){

            $this->id = $id;
            $this->nom = $nom;
            $this->passw = $passw;
            $this->numTel = $numTel;
            
        }

        public function getid(){return $this->id;}
        public function setid($id){ $this->id =$id;}

        public function getnom(){return $this->nom;}
        public function setnom($nom){ $this->nom =$nom;}

        public function getpassw(){return $this->passw;}
        public function setpassw($passw){ $this->passw =$passw;}

        public function getnum(){return $this->numTel;}
        public function setnum($numTel){ $this->numTel =$numTel;}

        public function getvalid(){ return $this->valid;}
        public function setvalid($valid){ $this->valid = $valid;}
    }