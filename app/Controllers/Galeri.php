<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Konfigurasi_model;
use App\Models\Galeri_model;
use App\Models\Menu_model;

class Galeri extends BaseController
{
	// Galeri
	public function index()
	{
		$m_konfigurasi 	= new Konfigurasi_model();
		$m_galeri		= new Galeri_model();
		$konfigurasi 	= $m_konfigurasi->listing();
		$galeri 		= $m_galeri->galeri();
		$slider 		= $m_galeri->slider();
		$kategori		= $m_galeri->kategori();

		$data = [
			'title'			=> 'Galeri Gambar',
			'description'	=> 'Galeri Gambar ' . $konfigurasi['namaweb'] . ', ' . $konfigurasi['tentang'],
			'keywords'		=> 'Galeri Gambar ' . $konfigurasi['namaweb'] . ', ' . $konfigurasi['keywords'],
			'galeri'		=> $galeri,
			'konfigurasi'	=> $konfigurasi,
			'kategori'		=> $kategori,
			'slider'		=> $slider,
			'content'		=> 'galeri/index'
		];
		echo view('layout/wrapper', $data);
	}
}
