<?php 

require_once "Model.class.php";
require_once "Confirmer.class.php";

class ConfManager extends Model{

    private $Confirmers;

    public function ajoutConf($Conf){

        $this ->Confirmers[] = $Conf;
    }

    public function getConf(){

        return $this->Confirmers;
    }

    public function chargeConf(){
        $req = $this->getbdd()->prepare("SELECT * FROM confirmer");
        $req->execute();
        $Lesconfs = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach ($Lesconfs as $Conf) {
            $CF = new Confirmer($Conf['idClt'],$Conf['idAbn'],$Conf['DDAbn'],$Conf['DFAbn'],$Conf['TyPaie']);
            $this->ajoutConf($CF);
        }

    }
} 