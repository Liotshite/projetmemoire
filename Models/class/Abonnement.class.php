<?php 

    class Abonnement{

        private $idAbn;
        private $NbrM;
        private $tarif;
        private $descrAbn;
        private $valid;

        public function __construct($id,$NbrM,$tarif,$descrip){
            
            $this->idAbn = $id;
            $this->NbrM = $NbrM;
            $this->tarif = $tarif;
            $this->descrAbn = $descrip;
        }

        public function getid(){return $this->idAbn;}
        public function setid($id){ $this->idAbn =$id;}

        public function getnom(){return $this->NbrM;}
        public function setnom($nbr){ $this->NbrM =$nbr;}

        public function gettarif(){return $this->tarif;}
        public function settarif($tar){ $this->tarif =$tar;}

        public function getdescr(){return $this->descrAbn;}
        public function setdescr($desc){ $this->descrAbn =$desc;}

        public function getvalid(){ return $this->valid;}
        public function setvalid($valid){ $this->valid = $valid;}
    }