<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Konfigurasi_model;
use App\Models\Kurikulum_model;
use App\Models\Kategori_kurikulum_model;

class kurikulum extends BaseController
{
    // kurikulum
    public function index()
    {
        $m_konfigurasi     = new Konfigurasi_model();
        $m_kurikulum        = new Kurikulum_model();
        $m_kategori        = new Kategori_kurikulum_model();
        $konfigurasi     = $m_konfigurasi->listing();
        $kategori         = $m_kategori->listing();
        $slider         = $m_kurikulum->slider();
        $kurikulum      = $m_kurikulum->listing();

        $data = [
            'title'            => 'kurikulum Kami',
            'description'    => 'kurikulum Kami ' . $konfigurasi['namaweb'] . ', ' . $konfigurasi['tentang'],
            'keywords'        => 'kurikulum Kami ' . $konfigurasi['namaweb'] . ', ' . $konfigurasi['keywords'],
            'kategori'        => $kategori,
            'kurikulum'        => $kurikulum,
            'konfigurasi'    => $konfigurasi,
            'slider'            => $slider,
            'content'        => 'kurikulum/index'
        ];
        echo view('layout/wrapper', $data);
    }

    public function detail($slug_namam)
    {
        $m_konfigurasi     = new Konfigurasi_model();
        $m_kurikulum        = new Kurikulum_model();
        $m_kategori        = new Kategori_kurikulum_model();
        $konfigurasi     = $m_konfigurasi->listing();
        $kategori         = $m_kategori->listing();
        $slider         = $m_kurikulum->slider();
        $kurikulum      = $m_kurikulum->detail2($slug_namam);

        $data = [
            'title'            => 'kurikulum Kami',
            'description'    => 'kurikulum Kami ' . $konfigurasi['namaweb'] . ', ' . $konfigurasi['tentang'],
            'keywords'        => 'kurikulum Kami ' . $konfigurasi['namaweb'] . ', ' . $konfigurasi['keywords'],
            'kategori'        => $kategori,
            'kurikulum'        => $kurikulum,
            'konfigurasi'    => $konfigurasi,
            'slider'            => $slider,
            'content'        => 'kurikulum/detail'
        ];
        echo view('layout/wrapper', $data);
    }
}
