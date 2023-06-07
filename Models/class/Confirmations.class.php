<?php 

    class confirmation{

        private $idClt;
        private $idAbn;
        private $DDabn;
        private $NbrM;
        private $typaie;
        private $DFabn;

        public function __construct($idClt,$idAbn,$DDabn,$NbrM,$typaie,$DFabn){

            $this->idClt = $idClt;
            $this->idAbn = $idAbn;
            $this->DDabn = $DDabn;
            $this->NbrM = $NbrM;
            $this->typaie = $typaie;
            $this->DFabn = $DFabn;           
            
        }

        public function getidclt(){ return $this->idClt;}
        public function setidclt($idclt){ $this->idClt = $idclt;}

        public function getidabn(){ return $this->idAbn;}
        public function setidabn($idabn){ $this->idAbn = $idabn;}

        public function getddabn(){ return $this->DDabn;}
        public function setddabn($ddabn){ $this->DDabn = $ddabn;}

        public function getnbrm(){ return $this->NbrM;}
        public function setnbrm($Nbr){ $this->NbrM = $Nbr;}

        public function gettyp(){ return $this->typaie;}
        public function settyp($typ){ $this->typaie = $typ;}

        public function getdfabn(){ return $this->DFabn;}
        public function setdfabn($df){ $this->DFabn = $df;}


    }