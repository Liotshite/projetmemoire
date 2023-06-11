<?php 

    require_once "Model.class.php";
    require_once "Projeter.class.php";

    class ProjManager extends Model{

        private $Projs;

        public function ajoutExp($Proj){

            $this ->Projs[] = $Proj;
        }

        public function getExp(){

            return $this->Projs;
        }

        public function chargeExp(){
            $req = $this->getbdd()->prepare("SELECT * FROM projeter");
            $req->execute();
            $LesProjs = $req->fetchAll(PDO::FETCH_ASSOC);
            $req->closeCursor();

            foreach ($LesProjs as $Proj) {
                $Prj = new Projeter($Proj['idClt'],$Proj['idPro'],$Proj['DDact'],$Proj['DFact'],$Proj['Cotev'],$Proj['ComClt'],$Proj['descrProj']);
                $this->ajoutExp($Prj);
            }

        }
    }