<?php
include '../model/empleado.php';
include '../model/contratista.php';

$identificacion = $_POST['documento'];
$nombre = $_POST['nombreEmpleado'];
$cargo = $_POST['cargoEmpleado'];
$valorHoraContratista = $_POST['valorHoraContratista'];
$horasTrabajadas = $_POST['horasTrabajadas'];

$objContratista = new Contratista($cargo, $identificacion, $nombre);

$objContratista->setTotalHoras($horasTrabajadas);
$objContratista->setValorHoras($valorHoraContratista);

$objContratista->calcularSalario($horasTrabajadas, $valorHoraContratista);

$json = array(
    'contrato' => 'contratista',
    'identificacion' => $objContratista->getIdentificacion(),
    'nombre' => $objContratista->getNombre(),
    'cargo' => $objContratista->getCargo(),
    'totalHora' => $objContratista->getTotalHoras(),
    'valorHora' => $objContratista->getValorHoras(),
    'salario' => $objContratista->getSalario()
);

$jsonString = json_encode($json);
echo $jsonString;
?>