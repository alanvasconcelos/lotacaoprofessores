<?php
  
  include_once 'Componente.class.php';
  include_once 'Periodo.class.php';

  class Oferta {
    private $ofr_cod;
    private $prd_cod;
    private $cmp;
    private $ofr_trm;
    private $ofr_vag;

    public function __set($atr, $value) {
      $this->$atr = $value;
    }

    public function __get($atr) {
      return $this->$atr;
    }

    public function setAll($cod, Periodo $prd, Fluxo $flx, Disciplina $dcp, $trm, $vag) {
      $this->ofr_cod = $cod;
      $this->prd_cod = $prd;
      $this->flx_cod = $flx;
      $this->dcp_cod = $dcp;
      $this->ofr_trm = $trm;
      $this->ofr_vag = $vag;
    }
  }
?>
