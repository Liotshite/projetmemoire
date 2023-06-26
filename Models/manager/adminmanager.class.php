<?php 

    require_once "Model.class.php";
    require_once "Admin.class.php";

    class AdminManager extends Model{

        private $Admins;

        public function ajoutAdmin($admin){

            $this ->Admins[] = $admin;
        }

        public function getAdmin(){

            return $this->Admins;
        }

        public function chargeAdmin(){
            $req = $this->getbdd()->prepare("SELECT * FROM admins");
            $req->execute();
            $LesAdmins = $req->fetchAll(PDO::FETCH_ASSOC);
            $req->closeCursor();

            foreach ($LesAdmins as $admin) {
                $Ad = new Admin($admin['idAdmin'],$admin['NmAdmin'],$admin['validAdm'],$admin['MdpAdm'],$admin['emailAdm']);
                $this->ajoutAdmin($Ad);
            }

        }
    }