<?php
  include_once 'pengurusBEM.php';
  class menteri extends pengurusBEM {

    public function __construct(){
    }

    function setJabatan() {// method
      $this->jabatan = 'Menteri';
    }

    public function getJabatan() {
      echo $this->jabatan;
    }
  }
