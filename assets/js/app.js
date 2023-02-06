let urlControll = '';

$("#tipoContrato").change(function() {
    if($('#tipoContrato').val() === 'planta'){
        $('#datosPlanta').removeClass('d-none');
        $('#datosContratista').addClass('d-none');
    }else{
        $('#datosPlanta').addClass('d-none');
        $('#datosContratista').removeClass('d-none');
    }
});

$('#formEmpleados').submit(function(e){
    e.preventDefault();

    const datosPost = {
        documento: $('#documento').val(),
        nombreEmpleado: $('#nombreEmpleado').val(),
        cargoEmpleado: $('#cargoEmpleado').val(),
        valorHora: $('#valorHora').val(),
        valorExtra: $('#valorExtra').val(),
        deducciones: $('#deducciones').val(),
        valorHoraContratista: $('#valorHoraContratista').val(),
        horasTrabajadas: $('#horasTrabajadas').val(),
    };

    if($('#tipoContrato').val() === 'planta'){
        urlControll = 'http://localhost/Calculadora_Salario/controller/plantasController.php';
    }

    $.post(urlControll, datosPost, function(response){
        let mensaje = JSON.parse(response);
        console.log(mensaje)
        
        $('#formEmpleados').removeClass('was-validated');
        $('#formEmpleados').trigger('reset');
    });

})