<?php

    //models/Hamburguesas.php

    //intentar ver si la herencia funciona

    class Hamburguesas  extends Model{ //representa a todas las hamburguesas.

        public function GetMenu(){
            $this->db->query("select * from hamburguesa");
            return $this->db->fetchAll();
        }

        public function CrearHamburguesa(){

        }

        //arreglar esto

        public function InsertarHamburguesa($nombre,$descripcion,$precio,$imagen){

            if($this->validarString($nombre));
            if($this->validarString($descripcion)); //modificar para la descripcion
            if($this->validarNumero($precio));
    
             $this->db->query("INSERT INTO hamburguesa (nombre,descripcion,precio,imagen) VALUES ('$nombre','$descripcion','$precio','$imagen'); ");
             
        }
    
        public function validarString($string){
            
            if(!isset($string)) die ('error1');     //validar que exista
            if(strlen($string) < 1) die('error2');  //validar tamaño minimo
            if(strlen($string) >20) die('error3');  //validar tamaño minimo
    
            $string = str_replace('%','\%',$string);    //remplazar comodin
            $string = str_replace('_','\_',$string);    //remplazar comodin
            return true;
        }
    
        public function validarNumero($precio){
            if(!isset($precio)) die ('error4');     //validar que exista
            if(!ctype_digit($precio)) die('error5');  //validar que sea un numero
            if($precio <= 0) die('error6');  //validar que sea un monto posible
            
            return true;
        }

        //en lugar de die utilizar excepsiones

        //eliminar hamburguesas

    public function eliminarHamburguesa(){
        
    }

    public function BorrarHamburguesa($idhamburguesa){
        if($this->validarNumero($idhamburguesa));   //validacion
        $this->db->query("DELETE FROM hamburguesa WHERE idHamburguesa = $idhamburguesa ");
    }




    }



?>