<?php
class Empleado{

    protected $cargo;
    protected $identificacion;
    protected $nombre;
    protected $salario;

    public function __construct($cargo, $identificacion, $nombre){
        $this->nombre = $nombre;
        $this->identificacion = $identificacion;
        $this->cargo = $cargo;
    }

    protected function getNombre(){
        return $this->nombre;
    }

    protected function getIdentificacion(){
        return $this->identificacion;
    }

    protected function getCargo(){
        return $this->cargo;
    }

    protected function getSalario(){
        return $this->salario;
    }

    protected function setNombre($valor){
        $this->nombre = $valor;
    }

    protected function setIdentificacion($valor){
        $this->identificacion = $valor;
    }

    protected function setCargo($valor){
        $this->cargo = $valor;
    }

    protected function setSalario($valor){
        $this->salario = $valor;
    }

}
?>