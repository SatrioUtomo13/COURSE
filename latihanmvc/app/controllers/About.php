<?php

class About extends Controller
{
    //default method
    public function index($nama = 'Satrio', $pekerjaan = 'Programmer')
    {
        $data = ['nama' => $nama, 'pekerjaan' => $pekerjaan, 'judul' => 'About'];
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page()
    {
        $this->view('templates/header');
        $this->view('about/page');
        $this->view('templates/footer');
    }
}
