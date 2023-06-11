<?php 

    class Projeter{

        private $idClt;
        private $idPro;
        private $DDact;
        private $DFact;
        private $cotev;
        private $comClt;
        private $descrProj;

        public function __construct($idClt,$idPro,$DDact,$DFact,$cotev,$comClt,$descrProj){

            $this->idClt = $idClt;
            $this->idPro = $idPro;
            $this->DDact = $DDact;
            $this->DFact = $DFact;
            $this->cotev = $cotev;
            $this->comClt = $comClt;
            $this->descrProj = $descrProj;
            
        }

        public function getidclt(){ return $this->idClt;}
        public function setidclt($idclt){ $this->idClt = $idclt;}

        public function getidPro(){ return $this->idPro;}
        public function setiExp($idPro){ $this->idPro = $idPro;}

        public function getddact(){ return $this->DDact;}
        public function setddact($ddact){ $this->DDact = $ddact;}

        public function getdfact(){ return $this->DFact;}
        public function setdfact($dfact){ $this->DFact = $dfact;}

        public function getcotev(){ return $this->cotev;}
        public function setcotev($cot){ $this->cotev = $cot;}

        public function getcomC(){ return $this->comClt;}
        public function setcomC($comClt){ $this->comClt = $comClt;}

        public function getdescr(){ return $this->descrProj;}
        public function setdescr($descrp){ $this->descrProj = $descrp;}

        
    }