<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Konfigurasi_model;
use App\Models\Berita_model;
use App\Models\Galeri_model;
use App\Models\Kategori_model;
use App\Models\Lecture_model;
use App\Models\Kategori_lecture_model;

class Berita extends BaseController
{

	// index
	public function index()
	{
		$m_konfigurasi 	= new Konfigurasi_model();
		$m_berita		= new Berita_model();
		$m_galeri		= new Galeri_model();
		$konfigurasi 	= $m_konfigurasi->listing();
		$berita 		= $m_berita->home();
		$slider 		= $m_galeri->slider();

		$data = [
			'title'			=> 'Information ' . $konfigurasi['namaweb'],
			'description'	=> 'Information ' . $konfigurasi['namaweb'],
			'keywords'		=> 'Information ' . $konfigurasi['namaweb'],
			'berita'		=> $berita,
			'slider'		=> $slider,
			'content'		=> 'berita/index'
		];
		echo view('layout/wrapper', $data);
	}

	// read
	public function read($slug_berita)
	{
		$m_konfigurasi 	= new Konfigurasi_model();
		$m_berita		= new Berita_model();
		$konfigurasi 	= $m_konfigurasi->listing();
		$berita 		= $m_berita->read($slug_berita);

		// Update hits
		$data = [
			'id_berita'	=> $berita['id_berita'],
			'hits'		=> $berita['hits'] + 1
		];
		$m_berita->edit($data);
		// Update hits

		$data = [
			'title'			=> $berita['judul_berita'],
			'description'	=> $berita['judul_berita'],
			'keywords'		=> $berita['judul_berita'],
			'berita'		=> $berita,
			'content'		=> 'berita/read'
		];
		echo view('layout/wrapper', $data);
	}

	// profil
	public function profil($slug_berita)
	{
		$m_konfigurasi 			= new Konfigurasi_model();
		$m_berita				= new Berita_model();
		$m_galeri				= new Galeri_model();
		$m_lecture             	= new Lecture_model();
		$m_kategori_lecture     = new Kategori_lecture_model();
		$konfigurasi 			= $m_konfigurasi->listing();
		$berita 				= $m_berita->read($slug_berita);
		$slider 				= $m_galeri->slider();
		$menu_profil  			= $m_berita->profil($slug_berita);
		$lecture                = $m_lecture->posting();
		$kategori_lecture	    = $m_kategori_lecture->listing();


		// Update hits
		$data = [
			'id_berita'	=> $berita['id_berita'],
			'hits'		=> $berita['hits'] + 1
		];
		$m_berita->edit($data);
		// Update hits

		$data = [
			'title'			=> $berita['judul_berita'],
			'description'	=> $berita['judul_berita'],
			'keywords'		=> $berita['judul_berita'],
			'berita'		=> $berita,
			'slider'		=> $slider,
			'lecture'            => $lecture,
			'kategori_lecture' => $kategori_lecture,
			'menu_profil'	=> $menu_profil,
			'content'		=> 'berita/profil'
		];
		echo view('layout/wrapper', $data);
	}

	// layanan
	public function layanan($slug_berita)
	{
		$m_konfigurasi 	= new Konfigurasi_model();
		$m_berita		= new Berita_model();
		$konfigurasi 	= $m_konfigurasi->listing();
		$berita 		= $m_berita->read($slug_berita);

		// Update hits
		$data = [
			'id_berita'	=> $berita['id_berita'],
			'hits'		=> $berita['hits'] + 1
		];
		$m_berita->edit($data);
		// Update hits

		$data = [
			'title'			=> $berita['judul_berita'],
			'description'	=> $berita['judul_berita'],
			'keywords'		=> $berita['judul_berita'],
			'berita'		=> $berita,
			'content'		=> 'berita/layanan'
		];
		echo view('layout/wrapper', $data);
	}

	// kategori
	public function kategori($slug_kategori)
	{
		$m_konfigurasi 	= new Konfigurasi_model();
		$m_berita		= new Berita_model();
		$m_kategori		= new Kategori_model();
		$m_galeri		= new Galeri_model();
		$konfigurasi 	= $m_konfigurasi->listing();
		$kategori 		= $m_kategori->read($slug_kategori);
		$berita 		= $m_berita->kategori($kategori['id_kategori']);
		$slider 		= $m_galeri->slider();
		// Update hits
		$data = [
			'id_kategori'	=> $kategori['id_kategori'],
			'hits'			=> $kategori['hits'] + 1
		];
		$m_kategori->edit($data);
		// Update hits

		$data = [
			'title'			=> $kategori['nama_kategori'],
			'description'	=> $kategori['nama_kategori'],
			'keywords'		=> $kategori['nama_kategori'],
			'kategori'		=> $kategori,
			'berita'		=> $berita,
			'slider'		=> $slider,
			'content'		=> 'berita/index'
		];
		echo view('layout/wrapper', $data);
	}
}
