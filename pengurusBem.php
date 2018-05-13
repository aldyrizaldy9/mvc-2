<?php
  class pengurusBEM {
    public $nama;
    public $nim;
    public $angkatan;
    private $jabatan;
    private $foto;

    public function setData($nama,$nim,$angkatan) {
      $this->nama   = $nama;
      $this->nim     = $nim;
      $this->angkatan = $angkatan;
    }

    public function getNama() {
      echo $this->nama;
    }

    public function getJabatan() {
      echo $this->jabatan;
    }
}