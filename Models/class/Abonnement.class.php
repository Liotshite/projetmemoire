<?php 

    class abonnement{

        private $id;
        private $nom;
        private $tarif;
        private $descrip;
        private $valid;

        public function __construct($id,$nom,$tarif,$descrip){
            
            $this->id = $id;
            $this->nom = $nom;
            $this->tarif = $tarif;
            $this->descrip = $descrip;
        }

        public function getid(){return $this->id;}
        public function setid($id){ $this->id =$id;}

        public function getnom(){return $this->nom;}
        public function setnom($nom){ $this->nom =$nom;}

        public function gettarif(){return $this->tarif;}
        public function settarif($tar){ $this->tarif =$tar;}

        public function getdescr(){return $this->descrip;}
        public function setdescr($desc){ $this->descrip =$desc;}

        public function getvalid(){ return $this->valid;}
        public function setvalid($valid){ $this->valid = $valid;}
    }