<?php 

    class admin{

        private $idAdmin;
        private $NmAdmin;
        private $MdpAdm;
        private $emailAdm;
        private $validAdm;

        public function __construct($id,$nom,$MdpAdm,$emailAdm){

            $this->idAdmin = $id;
            $this->NmAdmin = $nom;
            $this->MdpAdm = $MdpAdm;
            $this->emailAdm = $emailAdm;
            
        }

        public function getid(){return $this->idAdmin;}
        public function setid($id){ $this->idAdmin =$id;}

        public function getnom(){return $this->NmAdmin;}
        public function setnom($nom){ $this->NmAdmin =$nom;}

        public function getpassw(){return $this->MdpAdm;}
        public function setpassw($MdpAdm){ $this->MdpAdm =$MdpAdm;}

        public function getemail(){return $this->emailAdm;}
        public function setemail($email){ $this->emailAdm =$email;}

        public function getvalid(){ return $this->validAdm;}
        public function setvalid($valid){ $this->validAdm = $valid;}
    }