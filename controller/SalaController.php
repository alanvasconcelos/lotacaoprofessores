<?php
// @arquivo = /controller/SalaController.php
// MVC = controller
// objeto = Sala

require_once('../dao/SalaDAO.php');

class SalaController {

  public function register (Sala $sala) {
    $salaDAO = new SalaDAO();
    return $salaDAO->register($sala);
  }

  public function update (Sala $sala) {
    $salaDAO = new SalaDAO();
    return $salaDAO->update($sala);
  }

  public function remove ($sla_cod) {
    $salaDAO = new SalaDAO();
    return $salaDAO->remove($sla_cod);
  }

  public function search ($sla_cod) {
    $salaDAO = new SalaDAO();
    return $salaDAO->search($sla_cod);
  }

  public function searchAll () {
    $salaDAO = new SalaDAO();
    return $salaDAO->searchAll();
  }

}

?>