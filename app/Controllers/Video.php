<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Konfigurasi_model;
use App\Models\Video_model;
use App\Models\Galeri_model;

class Video extends BaseController
{
	// Video
	public function index()
	{
		$m_konfigurasi 	= new Konfigurasi_model();
		$m_video		= new Video_model();
		$m_galeri		= new Galeri_model();
		$slider 		= $m_galeri->slider();
		$konfigurasi 	= $m_konfigurasi->listing();
		$video 			= $m_video->listing();

		$data = [
			'title'			=> 'Video File',
			'description'	=> 'Video File ' . $konfigurasi['namaweb'] . ', ' . $konfigurasi['tentang'],
			'keywords'		=> 'Video File ' . $konfigurasi['namaweb'] . ', ' . $konfigurasi['keywords'],
			'video'			=> $video,
			'konfigurasi'	=> $konfigurasi,
			'slider'		=> $slider,
			'content'		=> 'video/index'
		];
		echo view('layout/wrapper', $data);
	}
}
