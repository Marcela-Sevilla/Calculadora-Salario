let urlControll = '';
let template = '';

const crearTabla = function(listaDatos, contrato){
    if(contrato === 'planta'){
        template = `<tr>
            <td>${listaDatos.identificacion}</td>
            <td>${listaDatos.nombre}</td>
            <td>${listaDatos.cargo}</td>
        </tr>
        
        <tr>
            <th>Valor de la Hora</th>
            <th>Valor Extra</th>
            <th>Total Deducciones</th>
        </tr>
        <tr>
            <td>$${listaDatos.valorHora}</td>
            <td>$${listaDatos.valorExtra}</td>
            <td>$${listaDatos.deducciones}</td>
        </tr>
        <tr>
            <th>Total Salario</th>
            <td colspan="2">$${listaDatos.salario}</td>
        </tr>`;
    }else{
        template = `<tr>
            <td>${listaDatos.identificacion}</td>
            <td>${listaDatos.nombre}</td>
            <td>${listaDatos.cargo}</td>
        </tr>
        
        <tr>
            <th>Valor de la Hora</th>
            <th>Total de Horas Trabajadas en el Mes</th>
            <th>Salario</th>
        </tr>
        <tr>
            <td>$${listaDatos.valorHora}</td>
            <td>${listaDatos.totalHora}</td>
            <td>$${listaDatos.salario}</td>
        </tr>`;
    }
    $('#bodyTable').html(template);
    $('#contrato').html(contrato);
}

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
        urlControll = 'http://localhost/Calculadora-Salario/controller/plantasController.php';
    }else{
        urlControll = 'http://localhost/Calculadora-Salario/controller/contratistasController.php';
    }

    $.post(urlControll, datosPost, function(response){
        let datos = JSON.parse(response);

        crearTabla(datos, datos.contrato);
        
        $('#formEmpleados').removeClass('was-validated');
        $('#formEmpleados').trigger('reset');
        $('#cardForm').addClass('d-none');
        $('#tablaSalario').removeClass('d-none');
    });

})