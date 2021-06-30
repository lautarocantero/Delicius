<?php

    //models/Papas.php

    class Papas extends Model{
       
        public function GetMenu(){
            $this->db->query("select * from papas");
            return $this->db->fetchAll();
        }

        public function CrearPapas(){

        }

        public function InsertarPapas($nombre,$descripcion,$precio,$imagen){

            if($this->validarString($nombre));
            if($this->validarString($descripcion)); //modificar para la descripcion
            if($this->validarNumero($precio));
    
             $this->db->query("INSERT INTO papas (nombre,descripcion,precio,imagen) VALUES ('$nombre','$descripcion','$precio','$imagen'); ");
             
        }
    
        public function validarString($string){
            
            if(!isset($string)) throw new validarExcepcion ('error1');     //validar que exista
            if(strlen($string) < 1) throw new validarExcepcion('error2');  //validar tamaño minimo
            if(strlen($string) >30) throw new validarExcepcion('error3');  //validar tamaño minimo
    
            $string = str_replace('%','\%',$string);    //remplazar comodin
            $string = str_replace('_','\_',$string);    //remplazar comodin
            return true;
        }
    
        public function validarNumero($precio){
            if(!isset($precio)) throw new validarExcepcion ('error4');     //validar que exista
            if(!ctype_digit($precio)) throw new validarExcepcion('error5');  //validar que sea un numero
            if($precio <= 0) throw new validarExcepcion('error6');  //validar que sea un monto posible
            
            return true;
        }

        //eliminar hamburguesas

        public function eliminarPapas(){
            
        }

        public function BorrarPapas($idpapas){
            if($this->validarNumero($idpapas));   //validacion
            $this->db->query("DELETE FROM papas WHERE idpapas = $idpapas ");
        }



    }
    

?>
