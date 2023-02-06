<?php

// PLANTA
class Planta extends Empleado{
    private $deducciones;
    private $sueldoBasico;
    private $valorExtras;

    public function __construct($cargo, $identificacion, $nombre){
        parent::__construct($cargo, $identificacion, $nombre);
    }

    public function calcularSalario(){
        $this->salario = $this->sueldoBasico + $this->valorExtras - $this->deducciones;
    }

    public function getDeducciones(){
        return $this->deducciones;
    }

    public function getSueldoBasico(){
        return $this->sueldoBasico;
    }

    public function getValorExtras(){
        return $this->valorExtras;
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

    public function setDeducciones($valor){
        $this->deducciones = $valor;
    }

    public function setSueldoBasico($valor){
        $this->sueldoBasico = $valor;
    }

    public function setValorExtras($valor){
        $this->valorExtras = $valor;
    }
}

?>