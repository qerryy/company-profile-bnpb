<?php

class Home extends Controller {

    public function index()
    {
        $data['judul'] = 'Home';

        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }

    public function sejarah()
    {
        $data['judul'] = 'Sejarah';

        $this->view('templates/header', $data);
        $this->view('home/sejarah');
        $this->view('templates/footer');
    }

    public function visiMisi()
    {
        $data['judul'] = 'Visi & Misi';

        $this->view('templates/header', $data);
        $this->view('home/visi-misi');
        $this->view('templates/footer');
    }

    public function tugasFungsi()
    {
        $data['judul'] = 'Tugas & Fungsi';

        $this->view('templates/header', $data);
        $this->view('home/tugas-fungsi');
        $this->view('templates/footer');
    }

    public function dashboard()
    {
        $data['judul'] = 'Dashboard';

        $this->view('templates/header', $data);
        $this->view('dashboard/index', $data);
        $this->view('templates/footer');
    }
}