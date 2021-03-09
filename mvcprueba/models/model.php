<?php
    class models{
        public function enlacesmodel($enlace){
            $retorno = "";
            if($enlace== "home"||
               $enlace == "cards"||
               $enlace== "carrusel"||
               $enlace== "modal"){
                $retorno = "views/modulos/".$enlace.".php";
            }
            else{
                $retorno = "views/modulos/home.php";
            }
            return $retorno;
        }
    }

 ?>
