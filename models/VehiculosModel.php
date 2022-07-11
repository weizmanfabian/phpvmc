<!-- framework codenater -->
<?php
class VehiculosModel
{
  private $db;
  private $vehiculos;

  public function __construct()
  {
    $this->db = Conectar::conexion();
    $this->vehiculos = array();
  }

  public function getVehiculos()
  {
    $sql = "SELECT * FROM vehiculos";
    $result = $this->db->query($sql);

    while ($row = $result->fetch_assoc()) {
      $this->vehiculos[] = $row;
    }
    return $this->vehiculos;
  }

  public function insertar($placa, $marca, $modelo, $anio, $color)
  {
    $resultado = $this->db->query("INSERT INTO vehiculos 
    (
      placa, 
      marca, 
      modelo, 
      anio, 
      color
    ) 
    VALUES
    (
      '$placa', 
      '$marca', 
      '$modelo', 
      '$anio', 
      '$color'
    )");
  }

  public function modificar($id, $placa, $marca, $modelo, $anio, $color)
  {
    $resultado = $this->db->query("UPDATE vehiculos SET
      placa = '$placa', 
      marca = '$marca', 
      modelo = '$modelo', 
      anio = '$anio', 
      color = '$color' 
      WHERE id = '$id'
    ");
  }

  public function eliminar($id)
  {
    $resultado = $this->db->query("DELETE FROM vehiculos WHERE id = '$id'");
  }
}
