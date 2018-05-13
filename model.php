<?php
  include 'kepalaDepartment.php';
  include 'menteri.php';
  class m_programKerja {
    public $hasil = array();
    public $user;

    public function setPogramKerja($nomorProgram, $namaProgram, $suratKeterangan){
      include "Koneksi.php";
      $rs = $mysqli->query("  INSERT INTO proker
                  VALUES ('$nomorProgram','$namaProgram','$suratKeterangan')");
    }

    public function getSemuaPogramKerja(){
      include "Koneksi.php";
      $rs = $mysqli->query("SELECT * FROM proker");
      $rows = array();

      while($row = $rs->fetch_assoc()) {
        $rows[] = $row;
      }
      return $rows;
    }

    public function getPogramKerja($nomorProgram){
      include "Koneksi.php";
      $rs = $mysqli->query("SELECT * FROM proker WHERE nomorProgram='$nomorProgram'");
      return mysqli_fetch_array($rs);
    }

    public function updatePogramKerja($nomorProgram, $namaProgram, $suratKeterangan){
      include "Koneksi.php";
      $rs = $mysqli->query("  UPDATE proker SET   nomorProgram= '$nomorProgram', namaProgram = '$namaProgram', suratKeterangan = '$suratKeterangan' WHERE nomorProgram = '$nomorProgram'");
    }

    public function deletePogramKerja($nomorProgram){
      include "Koneksi.php";
      $rs = $mysqli->query("  DELETE from proker WHERE nomorProgram = '$nomorProgram'");
    }

    public function Login($id, $pass){
      if($id=='kepaladept' && $pass=='kepaladept'){
        $_SESSION['status'] = 'kadep';
        $user = new kepalaDepartment();
        $user->setData('Rizaldy Ilham Akbar','165150201111014','2016');
        $user->setJabatan();
      }
      else if($id=='menteri' && $pass=='menteri'){
        $_SESSION['status'] = 'menteri';
        $user = new menteri();
        $user->setData('Cindy Gulla','165150201111015','2016');
        $user->setJabatan();
      }
    }

    public function Logout(){
      session_start();
      session_destroy();
    }
  }
