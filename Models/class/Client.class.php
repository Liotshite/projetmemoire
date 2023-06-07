<?php 

class Client{

    private $id;
    private $nomClt;
    private $email;
    private $adresseClt;
    private $numClt;
    private $passwClt;
    private $abnClt;
    private $imageClt;
    private $valid;

    public function __construct($id,$nomClt,$email,$adresseClt,$numClt,$passwClt,$abnClt,$imageClt){
        $this->id = $id;
        $this->nomClt = $nomClt;
        $this->email = $email;
        $this->adresseClt = $adresseClt;
        $this->numClt = $numClt;
        $this->passwClt = $passwClt;
        $this->abnClt = $abnClt;
        $this->imageClt = $imageClt;
    }

    public function getid(){ return $this->id;}
    public function setid($id){ $this->id = $id;}

    public function getnom(){ return $this->nomClt;}
    public function setnom($nom){ $this->nomClt = $nom;}

    public function getemail(){ return $this->email;}
    public function setemail($email){ $this->email = $email;}

    public function getadresse(){ return $this->adresseClt;}
    public function setadresse($adresse){ $this->adresseClt = $adresse;}

    public function getpass(){ return $this->passwClt;}
    public function setpass($pass){ $this->passwClt = $pass;}

    public function getabn(){ return $this->abnClt;}
    public function setabn($abn){ $this->abnClt = $abn;}

    public function getimg(){ return $this->imageClt;}
    public function setimg($img){ $this->imageClt = $img;}

    public function getnum(){ return $this->numClt;}
    public function setnum($num){ $this->numClt = $num;}

    public function getvalid(){ return $this->valid;}
    public function setvalid($valid){ $this->valid = $valid;}

}

