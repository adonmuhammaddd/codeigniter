<?php defined("BASEPATH") OR exit("No direct script access allowed");

  class Dashboard extends MY_Controller {

    public function __construct()
    {
      parent::__construct();
      $this->cekLogin();
    }

    public function index()
    {
      // Data ini akan ditampilkan di header.php pada tag <title>
      $data["pageTitle"] = "Dashboard";

      // Data ini akan ditampilkan di content.php
      $data["pageContent"] = $this->load->view("dashboard/main.php", NULL, TRUE);

      // Memanggil view layout.php
      $this->load->view("template/layout", $data);
    }

    public function routing_ka_ayah()
    {
      echo 'Hahaha';
    }
  }
