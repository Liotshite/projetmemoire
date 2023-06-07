<?php 

    class Valider{

        private $idClt;
        private $idExp;
        private $DDact;
        private $DFact;
        private $cotev;
        private $comClt;
        private $descrprojet;
        private $comExp;

        public function __construct($idClt,$idExp,$DDact,$DFact,$cotev,$comClt,$descrprojet,$comExp){

            $this->idClt = $idClt;
            $this->idExp = $idExp;
            $this->DDact = $DDact;
            $this->DFact = $DFact;
            $this->cotev = $cotev;
            $this->comClt = $comClt;
            $this->descrprojet = $descrprojet;
            $this->comExp = $comExp;
            
        }

        public function getidclt(){ return $this->idClt;}
        public function setidclt($idclt){ $this->idClt = $idclt;}

        public function getidExp(){ return $this->idExp;}
        public function setiExp($idexp){ $this->idExp = $idexp;}

        public function getddact(){ return $this->DDact;}
        public function setddact($ddact){ $this->DDact = $ddact;}

        public function getdfact(){ return $this->DFact;}
        public function setdfact($dfact){ $this->DFact = $dfact;}

        public function getcotev(){ return $this->cotev;}
        public function setcotev($cot){ $this->cotev = $cot;}

        public function getcomC(){ return $this->comClt;}
        public function setcomC($comClt){ $this->comClt = $comClt;}

        public function getdescr(){ return $this->descrprojet;}
        public function setdescr($descrp){ $this->descrprojet = $descrp;}

        public function getcomE(){ return $this->comExp;}
        public function setcomE($comE){ $this->comExp = $comE;}
        
    }