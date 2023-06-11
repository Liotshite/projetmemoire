<?php 

require_once "Model.class.php";
require_once "Publications.class.php";

class PubManager extends Model{

    private $Pubs;

    public function ajoutPub($Pub){

        $this ->Pubs[] = $Pub;
    }

    public function getPub(){

        return $this->Pubs;
    }

    public function chargeExp(){
        $req = $this->getbdd()->prepare("SELECT * FROM publications");
        $req->execute();
        $LesPubs = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach ($LesPubs as $Pub) {
            $publi = new Publication($Pub['idPub'],$Pub['contenuP'],$Pub['DatePub'],$Pub['NmAut'],$Pub['validPub']);
            $this->ajoutPub($publi);
        }

    }
}