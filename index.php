<?php 
define("URL", str_replace("index.php","",(isset($_SERVER['HTTPS']) ? "https" : "http")."://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));  
    try {
        
        if (empty($_GET['page'])) {
            require "views/presentation.views.php";
        }else {
            $url = explode("/",filter_var($_GET['page']),FILTER_SANITIZE_URL);
            
            switch ($url[0]) {
                case 'accueil': require "views/home.views.php";break;
                case 'pros': 
                    if (empty($url[1])) {
                        require "views/pro.views.php";
                    }else if($url[1] === "l") {
                        echo "views/pro.views.php";
                    } else {
                        throw new Exception(" ELEMENT NOT FOUND ");
                    };break;
                case 'emplois': 
                    if (empty($url[1])) {
                        require "views/emplois.views.php";
                    }else if($url[1] === "l") {
                        echo "lecture des offres d'emplois";
                    } else {
                        throw new Exception(" ELEMENT NOT FOUND ");
                    };break;
                case 'aide': require "views/aide.views.php";break;
                case 'inscription': require "views/connexion/inscr.views.php";break;
                case 'connexion': require "views/connexion/conn.views.php";break;
                default: throw new Exception(" PAGE NOT FOUND ");break;
    
            }
        }

    } catch (Exception $e) {

        echo $e->getMessage();
        
    }


