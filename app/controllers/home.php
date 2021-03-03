<?php

class Home extends Controller
{
    public function index()
    {
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMhasiswa();
        $data['title'] = 'Halaman Home';

        // var_dump($data); die;
        // header('Content-Type: application/json');
        // echo json_encode($data['mhs']);

        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}
