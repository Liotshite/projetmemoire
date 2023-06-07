<?php
 
    class Publication{
        
        private $id;
        private $idAuteur;
        private $contenue;
        private $datePub;
        private $NmAut;
        private $valid;

        public function __construct($id,$contenu,$idAuteur,$datePub,$NmAut){

            $this->id = $id;
            $this->idAuteur= $idAuteur;
            $this->contenue= $contenu;
            $this->datePub= $datePub;
            $this->NmAut= $NmAut;
            
        }

        public function getid(){ return $this->id;}
        public function setid($id){ $this->id = $id;}

        public function getidA(){ return $this->idAuteur;}
        public function setidA($idAuteur){ $this->idAuteur = $idAuteur;}

        public function getcont(){ return $this->contenue;}
        public function setcont($contenue){ $this->contenue = $contenue;}

        public function getdate(){ return $this->datePub;}
        public function setdate($datePub){ $this->datePub = $datePub;}

        public function getrop(){ return $this->NmAut;}
        public function setprop($NmAut){ $this->NmAut = $NmAut;}

        public function getvalid(){ return $this->valid;}
        public function setvalid($valid){ $this->valid = $valid;}
    }