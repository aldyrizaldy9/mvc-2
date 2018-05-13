<?php

require "koneksiMVC.php";

class m_proker {
  private $nomorProgram;
  private $namaProgram;
  private $suratKeterangan;
  private $connect;

  function __construct(){
    $this->connect = new koneksi();
  }

  function execute($query){
    return mysqli_query($this->connect->getConnection(),$query);
  }

  function selectAll(){
    $query = "SELECT * FROM proker";
    return $this->execute($query);
  }

  function selectPrk($nomor){
    $query = "SELECT * FROM proker WHERE nomorProgram='$nomor'";
    return $this->execute($query);
  }

  function updatePrk($nomor, $nama, $sk){
    $query = "UPDATE proker SET nomorProgram='$nomor', namaProgram='$nama', suratKeterangan='$sk' WHERE nomorProgram='$nomor'";
    return $this->execute($query);
  }

  function deletePrk($nomor){
    $query = "DELETE FROM proker WHERE nomorProgram='$nomor'";
    return $this->execute($query);
  }

  function insertPrk($nomor, $nama, $sk){
    $query = "INSERT INTO proker VALUES ('$nomor', '$nama', '$sk')";
    return $this->execute($query);
  }

  function fetch($var){
    return mysqli_fetch_array($var);
  }

  function __destruct(){
  }
}
