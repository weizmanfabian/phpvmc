<?php
class VehiculosController
{

  public function __construct()
  {
    require_once "models/VehiculosModel.php";
  }

  public function index()
  {
    //agregar un script y en caso de que exista no volverlo a instanciar, así evitamos errores
    $vehiculos = new VehiculosModel();
    $data["titulo"] = "Vehiculos";
    $data["vehiculos"] = $vehiculos->getVehiculos();

    require_once "views/vehiculos/vehiculosView.php";
  }

  public function nuevo()
  {

    $data["titulo"] = "Agregar Vehiculo";
    require_once "views/vehiculos/vehiculosAdd.php";
  }

  public function guardar()
  {
    $placa = $_POST['placa'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $anio = $_POST['anio'];
    $color = $_POST['color'];

    $vehiculo = new VehiculosModel();
    $vehiculo->insertar(
      $placa,
      $marca,
      $modelo,
      $anio,
      $color
    );
    $this->index();
  }

  public function editar($id)
  {
    $vehiculo = new VehiculosModel();
    $data["id"] = $id;
    $data["vehiculo"] = $vehiculo->getVehiculo($id);
    $data["titulo"] = "Editar Vehículo";
    require_once "views/vehiculos/vehiculosEdit.php";
  }

  public function actualizar()
  {
    $id = $_POST['id'];
    $placa = $_POST['placa'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $anio = $_POST['anio'];
    $color = $_POST['color'];

    $vehiculo = new VehiculosModel();
    $vehiculo->actualizar(
      $id,
      $placa,
      $marca,
      $modelo,
      $anio,
      $color
    );
    $this->index();
  }

  public function eliminar($id)
  {
    $vehiculo = new VehiculosModel();
    $vehiculo->eliminar($id);
    $this->index();
  }
}
