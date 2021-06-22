//variables

const btnEnviar = document.querySelector('#enviar');

const btnReset = document.querySelector('#resetBtn');

const nombre = document.querySelector('#nombre');

const descripcion = document.querySelector('#descripcion');

const precio = document.querySelector('#precio');

const imagen = document.querySelector('#imagen');

const formulario = document.querySelector('#enviar-mail');

//eventos

eventListeners();
function eventListeners(){
//iniciando la app
document.addEventListener('DOMContentLoaded', iniciarApp );

//validar campos
nombre.addEventListener('blur',validarFormulario);   //blur
descripcion.addEventListener('blur',validarFormulario);
precio.addEventListener('blur',validarFormulario);
imagen.addEventListener('blur',validarFormulario);

//enviar formulario 
formulario.addEventListener('submit',enviarEmail);

//resetear
btnReset.addEventListener('click',resetearFormulario);
}


//funciones

function iniciarApp(){

btnEnviar.disabled = true;
btnEnviar.classList.add('cursor-not-allowed', 'opacity-50');

}

function validarFormulario(e){

    if(e.target.value.length > 0){

        //eliminar advertencia del dom

        const error = document.querySelector('p.error');
        if(error){
            error.remove();
        }

        e.target.classList.remove('border-red-500');
        e.target.classList.add('border-green-500');
    }else{
        e.target.classList.remove('border', 'border-green-500');
        e.target.classList.add('border', 'border-red-500');
        mostrarError('Hay campos sin llenar!!');
    }


    //validacion pasada
    if( nombre.value !== '' && descripcion.value !== '' && precio.value !== '' && imagen.value !== ''){
        btnEnviar.disabled = false;
        btnEnviar.classList.remove('cursor-not-allowed', 'opacity-50');
    }  

}

function mostrarError(mensaje){

    const mensajeError = document.createElement('P');
    mensajeError.textContent = mensaje;
    mensajeError.classList.add('border', 'border-red-500','background-red-100','text-red-500','p-3','mt-5','mb-5','text-center','error');

    const errores = document.querySelectorAll('.error');
    if(errores.length === 0  ){
        formulario.insertBefore(mensajeError,document.querySelector('#spinner'));
    }else{
        formulario.re
    }

}


//resetear formulario

function resetearFormulario(){
formulario.reset();
email.classList.remove('border-green-500');   
asunto.classList.remove('border-green-500');   
mensaje.classList.remove('border-green-500');   
iniciarApp();
}