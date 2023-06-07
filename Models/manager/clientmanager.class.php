<?php 

require_once "Model.class.php";
require_once "Expert.class.php";

class ExpertManager extends Model{

    private $Experts;

    public function ajoutExp($expert){

        $this ->Experts[] = $expert;
    }

    public function getExp(){

        return $this->Experts;
    }

    public function chargeExp(){
        $req = $this->getbdd()->prepare("SELECT * FROM experts");
        $req->execute();
        $LesExperts = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach ($LesExperts as $expert) {
            $Exp = new Expert($expert['idExp'],$expert['nomPro'],$expert['AdresExp'],$expert['bioPro'],$expert['numPro'],$expert['cotPro'],$expert['typeEntite'],$expert['AdminResp'],$expert['MdpPro']);
            $this->ajoutExp($Exp);
        }

    }
} 