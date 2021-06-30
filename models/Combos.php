<?php

    class Combos extends Model{

        public function GetMenu(){
            $this->db->query("select * from combo");
            return $this->db->fetchAll();
        }

        public function CrearCombos($precio,$imagen,$nombre,$descripcion,$hamburguesa,$bebida,$papas){
            if($this->validarNumero($precio));
            if($this->validarNombre($nombre));
            if($this->validarDescripcion($descripcion));
            if($this->validarNumero($hamburguesa));
            if($this->validarNumero($bebida));
            if($this->validarNumero($papas));

            $this->db->query("INSERT INTO combo (precio,imagen,nombre,descripcion,hamburguesaid,bebidaid,papasid) VALUES ('$precio','$imagen','$nombre','$descripcion','$hamburguesa','$bebida','$papas'); ");

        }

        public function validarNombre($string){
                
            if(!isset($string)) throw new validarExcepcion('error1- no existe contenido en el nombre');     //validar que exista
            if(strlen($string) <3) throw new validarExcepcion('error2- la extencion del nombre es menor a 3 caracteres');  //validar tamaño minimo
            if(strlen($string) >30) throw new validarExcepcion('error3- el nombre no puede ser mayor a 30 caracteres');  //validar tamaño maximo
    
            $string = str_replace('%','\%',$string);    //remplazar comodin
            $string = str_replace('_','\_',$string);    //remplazar comodin
            return true;
        }

        public function validarDescripcion($string){
                
            if(!isset($string)) throw new validarExcepcion('error4- no existe contenido en la descripcion');     
            if(strlen($string) < 3) throw new validarExcepcion('error5- la extencion de la descripcion es menor a 3 caracteres');  
            if(strlen($string) >80) throw new validarExcepcion('error6-la descripcion no puede ser mayor a 80 caracteres');  
    
            $string = str_replace('%','\%',$string);    //remplazar comodin
            $string = str_replace('_','\_',$string);    //remplazar comodin
            return true;
        }

        public function validarNumero($precio){
            if(!isset($precio)) throw new validarExcepcion ('error7- no existe contenido del precio');     //validar que exista
            if(!ctype_digit($precio)) throw new validarExcepcion('error8- el precio no es un digito');  //validar que sea un numero
            if($precio <= 0) throw new validarExcepcion('error9- el precio no puede ser menor a 0');  //validar que sea un monto posible
            
            return true;
        }

        public function eliminarCombo(){

        }

        public function BorrarCombos($idcombo){
            if($this->ValidarNumero($idcombo));
            $this->db->query("DELETE FROM combo WHERE idcombo= $idcombo ");
        }

    }

    // class Excepsion extends Exception{

    // }


?>