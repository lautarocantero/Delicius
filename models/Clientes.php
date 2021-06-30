<?php

    class Clientes extends Model{

        public function GetClientes(){
            $this->db->query("select * from cliente");
            return $this->db->fetchAll();
        }

        public function CrearCliente($nombre,$email,$pasword,$telefono,$direccion){
            if($this->validarString($nombre));
            if($this->validarString($email));
            if($this->validarString($pasword));
            if($this->validarNumero($telefono));
            if($this->validarString($direccion));
            
            $this->db->query("INSERT INTO cliente (nombre,email,password,telefono,direccion) VALUES ('$nombre','$email','$pasword','$telefono','$direccion'); ");
        }

        public function validarString($string){
                
            if(!isset($string)) throw new validarExcepcion('error1- no existe contenido en el campo');     //validar que exista
            if(strlen($string) <3) throw new validarExcepcion('error2- la extencion del campo es menor a 3 caracteres');  //validar tamaño minimo
            if(strlen($string) >30) throw new validarExcepcion('error3- el campo no puede ser mayor a 30 caracteres');  //validar tamaño maximo
    
            $string = str_replace('%','\%',$string);    //remplazar comodin
            $string = str_replace('_','\_',$string);    //remplazar comodin
            return true;
        }

        public function validarNumero($telefono){
            if(!isset($telefono)) throw new validarExcepcion ('error7- no existe contenido en el telefono');     //validar que exista
            if(!ctype_digit($telefono)) throw new validarExcepcion('error8- el telefono no es un digito');  //validar que sea un numero
            if($telefono <= 0) throw new validarExcepcion('error9- el telefono no puede ser menor a 0');  //validar que sea un monto posible
            
            return true;
        }

        public function EliminarCliente($idcliente){
            if($this->ValidarNumero($idcliente));
            $this->db->query("DELETE FROM cliente WHERE idcliente= $idcliente ");
        }

    }

?>