<?php

// CONTRATISTAS
class Contratista extends Empleado{
    private $totalHoras;
    private $valorHoras;

    public function __construct($cargo, $identificacion, $nombre){
        parent::__construct($cargo, $identificacion, $nombre);
    }

    public function calcularSalario($totalHoras, $valorHoras){
        $this->salario = $totalHoras*$valorHoras;
    }

    public function getTotalHoras(){
        return $this->totalHoras;
    }

    public function getValorHoras(){
        return $this->valorHoras;
    }

    public function getCargo(){
        return $this->cargo;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getIdentificacion(){
        return $this->identificacion;
    }

    public function getSalario(){
        return $this->salario;
    }

    public function setTotalHoras($valor){
        $this->totalHoras = $valor;
    }

    public function setValorHoras($valor){
        $this->valorHoras = $valor;
    }
}

?>