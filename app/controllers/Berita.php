<?php

class Berita extends Controller {

    private $judul = 'Berita';

    public function index()
    {
        $data['judul'] = $this->judul;

        $this->view('templates/header', $data);
        $this->view('berita/index', $data);
        $this->view('templates/footer');
    }

    public function detail()
    {
        $data['judul'] = $this->judul;

        $this->view('templates/header', $data);
        $this->view('berita/detail');
        $this->view('templates/footer');
    }

    public function create()
    {
        $data['judul'] = $this->judul;

        $this->view('templates/header', $data);
        $this->view('berita/create');
        $this->view('templates/footer');
    }

    public function store()
    {
        $data['judul'] = $this->judul;

        return print("<pre>". print_r($_POST, true) ."</pre>");
    }

    public function edit()
    {
        $data['judul'] = $this->judul;

        $this->view('templates/header', $data);
        $this->view('berita/edit');
        $this->view('templates/footer');
    }

    public function update()
    {
        $data['judul'] = $this->judul;

        return print("<pre>". print_r($_POST, true) ."</pre>");
    }

    public function delete()
    {
        return print('data will be deleted here');
    }
}