<?php 

class Client{

    private $idClt;
    private $NmClt;
    private $BioClt;
    private $email;
    private $AdClt;
    private $NumClt;
    private $MdpClt;
    private $VAClt;
    private $imageClt;
    private $validClt;

    public function __construct($id,$BioClt,$NmClt,$email,$AdClt,$NumClt,$MdpClt,$VAClt,$imageClt){
        $this->idClt = $id;
        $this->BioClt = $BioClt;
        $this->NmClt = $NmClt;
        $this->email = $email;
        $this->AdClt = $AdClt;
        $this->NumClt = $NumClt;
        $this->MdpClt = $MdpClt;
        $this->VAClt = $VAClt;
        $this->imageClt = $imageClt;
    }

    public function getid(){ return $this->idClt;}
    public function setid($id){ $this->idClt = $id;}

    public function getBio(){ return $this->BioClt;}
    public function setBioi($Bio){ $this->BioClt = $Bio;}

    public function getnom(){ return $this->NmClt;}
    public function setnom($nom){ $this->NmClt = $nom;}

    public function getemail(){ return $this->email;}
    public function setemail($email){ $this->email = $email;}

    public function getadresse(){ return $this->AdClt;}
    public function setadresse($adresse){ $this->AdClt = $adresse;}

    public function getpass(){ return $this->MdpClt;}
    public function setpass($pass){ $this->MdpClt = $pass;}

    public function getabn(){ return $this->VAClt;}
    public function setabn($abn){ $this->VAClt = $abn;}

    public function getimg(){ return $this->imageClt;}
    public function setimg($img){ $this->imageClt = $img;}

    public function getnum(){ return $this->NumClt;}
    public function setnum($num){ $this->NumClt = $num;}

    public function getvalid(){ return $this->validClt;}
    public function setvalid($valid){ $this->validClt = $valid;}

}

