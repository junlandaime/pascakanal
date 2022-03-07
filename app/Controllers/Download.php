<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Konfigurasi_model;
use App\Models\Download_model;
use App\Models\Galeri_model;

class Download extends BaseController
{
	// Download
	public function index()
	{
		$m_konfigurasi 	= new Konfigurasi_model();
		$m_download		= new Download_model();
		$m_galeri		= new Galeri_model();
		$slider 		= $m_galeri->slider();
		$konfigurasi 	= $m_konfigurasi->listing();
		$download 		= $m_download->jenis_download('Download');

		$data = [
			'title'			=> 'Download File',
			'description'	=> 'Download File ' . $konfigurasi['namaweb'] . ', ' . $konfigurasi['tentang'],
			'keywords'		=> 'Download File ' . $konfigurasi['namaweb'] . ', ' . $konfigurasi['keywords'],
			'download'		=> $download,
			'konfigurasi'	=> $konfigurasi,
			'slider'		=> $slider,
			'content'		=> 'download/index'
		];
		echo view('layout/wrapper', $data);
	}

	// Unduh
	public function unduh($id_download)
	{
		$m_download 			= new Download_model();
		$download 				= $m_download->detail($id_download);
		// Update hits
		$data = [
			'id_download'	=> $download['id_download'],
			'hits'			=> $download['hits'] + 1
		];
		$m_download->edit($data);
		// Update hits
		return $this->response->download('../assets/upload/file/' . $download['gambar'], null);
	}
}
