<?php

include_once("m_programKerja.php");

class c_proker {

	public $model;

	function __construct(){
		$this->model = new m_proker();
	}

	function index(){
		$data = $this->model->selectAll();
		include "v_programKerja.php";
	}
	function viewEdit($nomor){
		$data = $this->model->selectPrk($nomor);
		$row = $this->model->fetch($data);
		include "v_edit.php";
	}

	function viewInsert(){
		include "v_tambah.php";
	}

	function update(){
		$nomor = $_POST['nomorProgram'];
		$nama = $_POST['namaProgram'];
		$sk = $_POST['suratKeterangan'];

		$update = $this->model->updatePrk($nomor, $nama, $sk);
		header("location:index.php");
	}

	function delete($nomor){
		$delete = $this->model->deletePrk($nomor);
		header("location:index.php");
	}

	function insert(){
		$nomor = $_POST['nomorProgram'];
		$nama = $_POST['namaProgram'];
		$sk = $_POST['suratKeterangan'];

		$insert = $this->model->insertPrk($nomor, $nama, $sk);
		header("location:index.php");
	}

	function __destruct(){
	}

}
