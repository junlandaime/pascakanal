<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Konfigurasi_model;
use App\Models\Lecture_model;
use App\Models\Kategori_lecture_model;
use App\Models\Galeri_model;

class Lecture extends BaseController
{
    // lecture
    public function index($id_lecture)
    {
        $m_konfigurasi       = new Konfigurasi_model();
        $m_lecture           = new lecture_model();
        $m_kategori          = new Kategori_lecture_model();
        $m_galeri        = new Galeri_model();
        $slider         = $m_galeri->slider();
        $konfigurasi     = $m_konfigurasi->listing();
        $kategori         = $m_kategori->listing();
        $lecture           = $m_lecture->detail($id_lecture);
        $lektor             = $m_lecture->listing();

        $data = [
            'title'            => 'Lecture Kami',
            'description'    => 'Lecture Kami ' . $konfigurasi['namaweb'] . ', ' . $konfigurasi['tentang'],
            'keywords'        => 'Lecture Kami ' . $konfigurasi['namaweb'] . ', ' . $konfigurasi['keywords'],
            'kategori'        => $kategori,
            'lektor'        => $lektor,
            'konfigurasi'    => $konfigurasi,
            'lecture'       => $lecture,
            'slider'        => $slider,
            'content'        => 'lecture/index'
        ];
        echo view('layout/wrapper', $data);
    }
}
