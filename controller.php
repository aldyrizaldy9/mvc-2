<?php
  include_once("model.php");

  class c_programKerja {
    public $model;

    public function __construct(){
      $this->model = new m_programKerja();
    }

    public function invoke(){
      session_start();
      if (isset($_SESSION['status']) && $_SESSION['status']=='kadep'){
        if(isset($_GET['edit'])){
          $data = $this->model->getPogramKerja($_GET['nomorProgram']);
          include 'v_edit.php';
          if (isset($_POST['Edit'])){
            $add= $this->model->updatePogramKerja($_GET['nomorProgram'], $_POST['namaProgram'], $_POST['suratKeterangan']);
            header('Location:index.php');
          }
        }
        else if(isset($_GET['delete'])){
          $del= $this->model->deletePogramKerja($_GET['nomorProgram']);
          header('Location:index.php');
        }
        else if(isset($_GET['tambah'])){
          include 'v_Tambah.php';
          if (isset($_POST['Add'])){
            $add= $this->model->setPogramKerja($_POST['nomorProgram'], $_POST['namaProgram'], $_POST['suratKeterangan']);
            header('Location:index.php');
          }
        }
        else if(isset($_GET['Logout'])){
          $logout= $this->model->Logout();
          header('Location:index.php');
        }
        else{
          $proker = $this->model->getSemuaPogramKerja();
          Include 'v_programKerjaCRUD.php';
        }
      }
      else if(isset($_SESSION['status']) && $_SESSION['status']=='menteri'){
        if(isset($_GET['Logout'])){
          $logout= $this->model->Logout();
          header('Location:index.php');
        }
        else {
          $proker = $this->model->getSemuaPogramKerja();
          Include 'v_programKerja.php';
        }
      }
      else{
        Include 'v_login.php';
        if (isset($_POST['Login'])){
          $login = $this->model->Login($_POST['id'], $_POST['pass']);
          header('Location:index.php');
        }
      }
    }
  }
