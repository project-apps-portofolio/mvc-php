<?php

class Controller
{

  // Untuk Menampilkan Controller file;
  public function view($view, $data = [])
  {
    require_once '../app/views/' . $view . '.php';
  }
  // Function Untuk Menampilkan File Model
  public function model($model)
  {
    require_once '../app/models/' . $model . '.php';
    return new $model;
  }
}
