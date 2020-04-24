<?php
include_once './respuestaErronea.php';
//include './respuestaErronea.php';
// Este archivo maneja la lógica para procesar la petición del cliente
// Se debe encargar de crear una instancia de la clase Validador y ejecutar la validación.
// Luego deberá devolver la respuesta adecuada
$validador= new Validador($_POST);

class Validador
{
  private $nombre;
  private $apellido;
  private $edad;
  private $estudios;

  public function __construct(array $datos){
    if(key_exists('nombre',$datos)=== false){
      respuestaErronea('por favor, ingrese el nombre');
      return;
    }
    if(key_exists('apellido',$datos)=== false){
      respuestaErronea('por favor, ingrese el apellido');
      return;
    }
    if(key_exists('edad',$datos)=== false){
      respuestaErronea('por favor, ingrese el edad');
      return;
    }
    if(key_exists('estudios',$datos)=== false){
      respuestaErronea('por favor, ingrese el estudios');
      return;
    }
    $this->nombre=$datos['nombre'];
    $this->apellido=$datos['apellido'];
    $this->edad=$datos['edad'];
    $this->estudios['estudios'];
  }
  public function Validar(){


if($this->nombre===""|| $this->apellido===""|| $this->edad==="" || $this->estudios===""){
  echo json_encode('error');
}else{
  echo json_encode('correcto:<br>nombre:'.$this->nombre.'<br>apellido:'.$this->apellido.'<br>edad:'.$this->edad.'<br>estudio:'.$this->estudio);
}

  }
}

?>