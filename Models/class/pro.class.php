<?php 

    class Pro{

        private $idPro;
        private $NmPro;
        private $emailPro;
        private $AdPro;
        private $MdpPro;
        private $numPro;
        private $bioPro;
        private $validPro;

        public function __construct($id,$NmPro,$email,$AdPro,$bioPro,$numPro,$MdpPro){
            $this->idPro = $id;
            $this->NmPro = $NmPro;
            $this->emailPro = $email;
            $this->AdPro = $AdPro;
            $this->bioPro = $bioPro;
            $this->numPro = $numPro;
            $this->MdpPro = $MdpPro;
            
        }

        public function getidE(){ return $this->idPro;}
        public function setidE($id){ $this->idPro = $id;}

        public function getnomE(){ return $this->NmPro;}
        public function setnomE($nom){ $this->NmPro = $nom;}

        public function getemail(){ return $this->emailPro;}
        public function setemail($email){ $this->emailPro = $email;}

        public function getadresseE(){ return $this->AdPro;}
        public function setadresseE($adresse){ $this->AdPro = $adresse;}

        public function getbioE(){ return $this->bioPro;}
        public function setbioE($bio){ $this->bioPro = $bio;}

        public function getnumE(){ return $this->numPro;}
        public function setnumE($num){ $this->numPro = $num;}

        public function getMdp(){ return $this->MdpPro;}
        public function setMdp($Mdp){ $this->MdpPro = $Mdp;}

        public function getvalid(){ return $this->validPro;}
        public function setvalid($valid){ $this->validPro = $valid;}


    }