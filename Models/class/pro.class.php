<?php 

    class Expert{

        private $id;
        private $nomPro;
        private $email;
        private $adressPro;
        private $MdpPro;
        private $numPro;
        private $bioPro;
        private $cotPro;
        private $typeEntite;
        private $adminResp;
        private $valid;

        public function __construct($id,$nomPro,$email,$adressPro,$bioPro,$numPro,$cotPro,$typeEntite,$adminResp, $MdpPro){
            $this->id = $id;
            $this->nomPro = $nomPro;
            $this->email = $email;
            $this->adressPro = $adressPro;
            $this->bioPro = $bioPro;
            $this->numPro = $numPro;
            $this->cotPro = $cotPro;
            $this->MdpPro = $MdpPro;
            
        }

        public function getidE(){ return $this->id;}
        public function setidE($id){ $this->id = $id;}

        public function getnomE(){ return $this->nomPro;}
        public function setnomE($nom){ $this->nomPro = $nom;}

        public function getemail(){ return $this->email;}
        public function setemail($email){ $this->email = $email;}

        public function getadresseE(){ return $this->adressPro;}
        public function setadresseE($adresse){ $this->adressPro = $adresse;}

        public function getbioE(){ return $this->bioPro;}
        public function setbioE($bio){ $this->bioPro = $bio;}

        public function getnumE(){ return $this->numPro;}
        public function setnumE($num){ $this->numPro = $num;}

        public function getcot(){ return $this->cotPro;}
        public function setcot($cote){ $this->cotPro = $cote;}

        public function getent(){ return $this->typeEntite;}
        public function setent($ent){ $this->typeEntite = $ent;}

        public function getadminid(){ return $this->adminResp;}
        public function setadminid($admin){ $this->adminResp = $admin;}

        public function getMdp(){ return $this->MdpPro;}
        public function setMdp($Mdp){ $this->MdpPro = $Mdp;}

        public function getvalid(){ return $this->valid;}
        public function setvalid($valid){ $this->valid = $valid;}


    }