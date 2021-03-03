<?php

class Category extends Controller
{

    function __construct()
    {
        $this->model = 'CategoryModel';
    }

    public function index()
    {
        $category = $this->model('CategoryModel')->getCategory();
        header('Content-Type: application/json');
        echo json_encode($category);
    }

    public function store()
    {
        $name = 'lorem';
        $desc = 'asd';
        $category = $this->model($this->model)->postCategory($name, $desc);
        echo json_encode($category);
    }

    public function update($id = NULL)
    {
        $name = 'ini';
        $desc = 'Guys';
        // var_dump((int) $id, $name, $desc); die;
        $category['category'] = $this->model($this->model)->updateCategory((int) $id, $name, $desc);
        header('location:../mahasiswa');
    }
}
