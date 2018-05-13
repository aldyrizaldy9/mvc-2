<?php
  include_once 'pengurusBEM.php';
  class kepalaDepartment extends pengurusBEM {

    public function __construct(){
    }

    function setJabatan() {// method
      $this->jabatan = 'Kepala Department';
    }

    public function getJabatan() {
      echo $this->jabatan;
    }
  }
