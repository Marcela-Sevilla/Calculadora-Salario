const mostrarTipoContrato = document.getElementById('tipoContrato');

mostrarTipoContrato.addEventListener('change', (e) =>{
    if(mostrarTipoContrato.value === 'planta'){
        document.getElementById('datosPlanta').classList.remove('d-none');
        document.getElementById('datosContratista').classList.add('d-none');
    }else{
        document.getElementById('datosPlanta').classList.add('d-none');
        document.getElementById('datosContratista').classList.remove('d-none');
    }
});