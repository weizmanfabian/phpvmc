<?php
// https://www.youtube.com/watch?v=oAFGbhy2QeE
//1:48
require_once "config/config.php";
require_once "core/routes.php";
require_once "config/database.php";
require_once "controllers/VehiculosController.php";

if (isset($_GET['c'])) {
  $controlador = cargarControlador($_GET['c']);
  if (isset($_GET['a'])) {
    if (isset($_GET['id'])) {
      cargarAccion($controlador, $_GET['a'], $_GET['id']);
    } else {
      cargarAccion($controlador, $_GET['a']);
    }
  } else {
    cargarAccion($controlador, ACCION_PRINCIPAL);
  }
} else {
  $controlador = cargarControlador(CONTROLADOR_PRINCIPAL);
  // cargarAccion(CONTROLADOR_PRINCIPAL, ACCION_PRINCIPAL);
  $accionTemp = ACCION_PRINCIPAL;
  $controlador->$accionTemp();
}
// $vehiculoController = new VehiculosController();
// $vehiculoController->index();
