<?php

class Bencana extends Controller {

    private $judul = 'Bencana';

    public function index()
    {
        $data['judul'] = $this->judul;

        $this->view('templates/header', $data);
        $this->view('bencana/index', $data);
        $this->view('templates/footer');
    }

    public function detail()
    {
        $data['judul'] = $this->judul;

        $this->view('templates/header', $data);
        $this->view('bencana/detail');
        $this->view('templates/footer');
    }

    public function create()
    {
        $data['judul'] = $this->judul;

        $this->view('templates/header', $data);
        $this->view('bencana/create');
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
        $this->view('bencana/edit');
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