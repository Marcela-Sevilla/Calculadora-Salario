const mostrarTipoContrato = document.getElementById('tipoContrato');
const formEmpleados = document.getElementById('formEmpleados');

const valorInput = function(input){
    return document.getElementById(input).value;
}

mostrarTipoContrato.addEventListener('change', (e) =>{
    if(mostrarTipoContrato.value === 'planta'){
        document.getElementById('datosPlanta').classList.remove('d-none');
        document.getElementById('datosContratista').classList.add('d-none');
    }else{
        document.getElementById('datosPlanta').classList.add('d-none');
        document.getElementById('datosContratista').classList.remove('d-none');
    }
});

formEmpleados.addEventListener('submit', (e) =>{
    e.preventDefault();

    const documento = valorInput('documento');
    const nombreEmpleado = valorInput('nombreEmpleado');
    const cargoEmpleado = valorInput('cargoEmpleado');
    const tipoContrato = valorInput('tipoContrato');

    if(tipoContrato === 'planta'){
        const valorHora = valorInput('valorHora');
        const valorExtra = valorInput('valorExtra');
        const deducciones = valorInput('deducciones');
    }else{
        const valorHora = valorInput('valorHoraContratista');
        const horasTrabajadas = valorInput('horasTrabajadas');
    }

});