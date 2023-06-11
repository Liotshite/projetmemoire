<?php 

    require_once "Model.class.php";
    require_once "Abonnement.class.php";

    class AbonnementManager extends Model{

        private $Abonnements;

        public function ajoutAdmin($abonnement){

            $this ->Abonnements[] = $abonnement;
        }

        public function getAdmin(){

            return $this->Abonnements;
        }

        public function chargeAdmin(){
            $req = $this->getbdd()->prepare("SELECT * FROM abonnements");
            $req->execute();
            $LesAbonnements = $req->fetchAll(PDO::FETCH_ASSOC);
            $req->closeCursor();

            foreach ($LesAbonnements as $abonnement) {
                $Ab = new Abonnement($abonnement['idAbn'],$abonnement['tarifAbn'],$abonnement['DescrAbn'],$abonnement['validAbn'],$abonnement['NbrM ']);
                $this->ajoutAdmin($Ab);
            }

        }
    }