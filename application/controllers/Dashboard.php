<?php defined("BASEPATH") OR exit("No direct script access allowed");

  class Dashboard extends CI_Controller {

    public function index()
    {
      // Data ini akan ditampilkan di header.php pada tag <title>
      $data["pageTitle"] = "Dashboard";

      // Data ini akan ditampilkan di content.php
      $data["pageContent"] = $this->load->view("dashboard/main.php", NULL, TRUE);

      // Memanggil view layout.php
      $this->load->view("template/layout", $data);
    }
  }
