<?php 

require_once "Model.class.php";
require_once "Client.class.php";

class CltManager extends Model{

    private $Clients;

    public function ajoutExp($Client){

        $this ->Clients[] = $Client;
    }

    public function getClt(){

        return $this->Clients;
    }

    public function chargeClt(){
        $req = $this->getbdd()->prepare("SELECT * FROM clients");
        $req->execute();
        $Lesclients = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach ($Lesclients as $Client) {
            $Clt = new Client($Client['idClt'],$Client['BioClt'],$Client['NmClt'],$Client['AdClt'],$Client['NumClt'],$Client['validClt'],$Client['VAClt'],$Client['email'],$Client['MdpClt']);
            $this->ajoutExp($Clt);
        }

    }
} 