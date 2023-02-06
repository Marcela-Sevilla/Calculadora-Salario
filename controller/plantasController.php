<?php
include '../model/empleado.php';
include '../model/planta.php';

$identificacion = $_POST['documento'];
$nombre = $_POST['nombreEmpleado'];
$cargo = $_POST['cargoEmpleado'];
$valorHora = $_POST['valorHora'];
$valorExtra = $_POST['valorExtra'];
$deducciones = $_POST['deducciones'];

$objPlanta = new Planta($cargo, $identificacion, $nombre);

$objPlanta->setDeducciones($deducciones);
$objPlanta->setSueldoBasico($valorHora);
$objPlanta->setValorExtras($valorExtra);

$objPlanta->calcularSalario();

$json = array(
    'contrato' => 'planta',
    'identificacion' => $objPlanta->getIdentificacion(),
    'nombre' => $objPlanta->getNombre(),
    'cargo' => $objPlanta->getCargo(),
    'deducciones' => $objPlanta->getDeducciones(),
    'valorHora' => $objPlanta->getSueldoBasico(),
    'valorExtra' => $objPlanta->getValorExtras(),
    'salario' => $objPlanta->getSalario()
);

$jsonString = json_encode($json);
echo $jsonString;

?>