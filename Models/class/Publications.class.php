<?php
 
    class Publication{
        
        private $idpub;
        private $contenue;
        private $datePub;
        private $NmAut;
        private $validPub;

        public function __construct($id,$contenu,$datePub,$NmAut){

            $this->idpub = $id;
            $this->contenue= $contenu;
            $this->datePub= $datePub;
            $this->NmAut= $NmAut;
            
        }

        public function getid(){ return $this->idpub;}
        public function setid($id){ $this->idpub = $id;}

        public function getcont(){ return $this->contenue;}
        public function setcont($contenue){ $this->contenue = $contenue;}

        public function getdate(){ return $this->datePub;}
        public function setdate($datePub){ $this->datePub = $datePub;}

        public function getrop(){ return $this->NmAut;}
        public function setprop($NmAut){ $this->NmAut = $NmAut;}

        public function getvalid(){ return $this->validPub;}
        public function setvalid($valid){ $this->validPub = $valid;}
    }