<?php 

    require_once "Model.class.php";
    require_once "Pro.class.php";

    class ProManager extends Model{

        private $Pros;

        public function ajoutExp($Pro){

            $this ->Pros[] = $Pro;
        }

        public function getExp(){

            return $this->Pros;
        }

        public function chargeExp(){
            $req = $this->getbdd()->prepare("SELECT * FROM Pros");
            $req->execute();
            $LesPros = $req->fetchAll(PDO::FETCH_ASSOC);
            $req->closeCursor();

            foreach ($LesPros as $Pro) {
                $Pr = new Pro($Pro['idPro'],$Pro['BioPro'],$Pro['NmPro'],$Pro['AdPro'],$Pro['NumPro'],$Pro['validPro'],$Pro['emailPro'],$Pro['MdpPro']);
                $this->ajoutExp($Pr);
            }

        }
    }