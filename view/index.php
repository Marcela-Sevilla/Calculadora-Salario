<?php
include './empleado.php';
include './contratos.php';

// Empleado Planta
$tipoEmpleado1 = 'planta';
$identificacion1 = '123456789';
$nombre1 = 'Maria Zapata';
$cargo1 = 'Administrador';

$objPlanta = new Planta($cargo1, $identificacion1, $nombre1);

$objPlanta->setDeducciones(1098000);
$objPlanta->setSueldoBasico(4500000);
$objPlanta->setValorExtras(345000);
$objPlanta->calcularSalario();

// Empleado Contratista
$tipoEmpleado2 = 'Contratista';
$identificacion2 = '987654321';
$nombre2 = 'Juan Camilo';
$cargo2 = 'Gerente';

$objContratista = new Contratista($cargo2, $identificacion2, $nombre2);
$objContratista->setTotalHoras(160);
$objContratista->setValorHoras(4000);
$objContratista->calcularSalario(160,4000);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Salario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <nav class="navbar bg-dark" data-bs-theme="dark">
            <div class="container-fluid">
                <h2 class="mb-0">APP Calcular Salario</h2>
            </div>
        </nav>
    </header>

    <main class="container my-5">
        <div class="row">
    
            <section class="card shadow-sm border-2 border-primary" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Empleado Planta</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Datos Del Empleado:</h6>
                    <p class="card-text"><?php echo 'Identificación: '.$objPlanta->getIdentificacion()?></p>
                    <p class="card-text"><?php echo 'Nombre: '.$objPlanta->getNombre()?></p>
                    <p class="card-text"><?php echo 'Cargo: '.$objPlanta->getCargo()?></p>
                    <p class="card-text"><?php echo 'Valor de la hora: $'.$objPlanta->getSueldoBasico()?></p>
                    <p class="card-text"><?php echo 'Valor Extras: $'.$objPlanta->getValorExtras()?></p>
                    <p class="card-text"><?php echo 'Total Deducciones: $'.$objPlanta->getDeducciones()?></p>
                    <h4 class="card-title">Resultado Salario:</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Salario Neto a Recibir:</h6>
                    <p class="card-text fw-semibold">$<?php echo $objPlanta->getSalario()?></p>
    
                </div>
            </section>

            <section class="card shadow-sm border-2 border-primary ms-4" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Empleado Contratista</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Datos Del Empleado:</h6>
                    <p class="card-text"><?php echo 'Identificación: '.$objContratista->getIdentificacion()?></p>
                    <p class="card-text"><?php echo 'Nombre: '.$objContratista->getNombre()?></p>
                    <p class="card-text"><?php echo 'Cargo: '.$objContratista->getCargo()?></p>
                    <p class="card-text"><?php echo 'Valor de la Hora: $'.$objContratista->getValorHoras()?></p>
                    <p class="card-text"><?php echo 'Total Horas: $'.$objContratista->getTotalHoras()?></p>
                    <h4 class="card-title">Resultado Salario:</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Salario Neto a Recibir:</h6>
                    <p class="card-text fw-semibold">$<?php echo $objContratista->getSalario()?></p>
    
                </div>
            </section>
    
        </div>
    </main>
    
</body>
</html>