<?php

namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use App\Models\Lecture_model;
use App\Models\Kategori_lecture_model;

class Lecture extends BaseController
{

    // mainpage
    public function index()
    {
        checklogin();
        $m_lecture             = new Lecture_model();
        $m_kategori_lecture     = new Kategori_lecture_model();
        $lecture                 = $m_lecture->listing();
        $total                 = $m_lecture->total();
        $kategori_lecture     = $m_kategori_lecture->listing();


        // Start validasi
        if ($this->request->getMethod() === 'post' && $this->validate(
            [
                'nama'         => 'required',
                'gambar'         => [
                    'mime_in[gambar,image/jpg,image/jpeg,image/gif,image/png]',
                    'max_size[gambar,4096]',
                ],
            ]
        )) {
            if (!empty($_FILES['gambar']['name'])) {
                // Image upload
                $avatar      = $this->request->getFile('gambar');
                $namabaru     = str_replace(' ', '-', $avatar->getName());
                $avatar->move(WRITEPATH . '../assets/upload/lecture/', $namabaru);
                // Create thumb
                $image = \Config\Services::image()
                    ->withFile(WRITEPATH . '../assets/upload/lecture/' . $namabaru)
                    ->fit(100, 100, 'center')
                    ->save(WRITEPATH . '../assets/upload/lecture/thumbs/' . $namabaru);
                // masuk database
                // masuk database
                $data = [
                    'id_user'        => $this->session->get('id_user'),
                    'id_kategori_lecture'    => $this->request->getPost('id_kategori_lecture'),
                    'fungsional'    => $this->request->getPost('fungsional'),
                    'prenama'            => $this->request->getPost('prenama'),
                    'slug_nama'    => strtolower(url_title($this->request->getVar('nama'))),
                    'nama'            => $this->request->getPost('nama'),
                    'postnama'            => $this->request->getPost('postnama'),
                    'jabatan'        => $this->request->getPost('jabatan'),
                    'pendidikan'        => $this->request->getPost('pendidikan'),
                    'telepon'        => $this->request->getPost('telepon'),
                    'sekofaku'        => $this->request->getPost('sekofaku'),
                    'email'            => $this->request->getPost('email'),
                    'keahlian'        => $this->request->getPost('keahlian'),
                    'project'        => $this->request->getPost('project'),
                    'publication'        => $this->request->getPost('publication'),
                    'hki'        => $this->request->getPost('hki'),
                    'gambar'        => $namabaru,
                    'status_lecture'    => $this->request->getPost('status_lecture'),
                    'tempat_lahir'    => $this->request->getPost('tempat_lahir'),
                    'tanggal_lahir'    => date('Y-m-d', strtotime($this->request->getPost('tanggal_lahir'))),
                    'tanggal_post'    => date('Y-m-d H:i:s')
                ];
                $m_lecture->tambah($data);
                // masuk database
                $this->session->setFlashdata('sukses', 'Data telah ditambah');
                return redirect()->to(base_url('admin/lecture'));
            } else {
                // masuk database
                $data = [
                    'id_user'        => $this->session->get('id_user'),
                    'id_kategori_lecture'    => $this->request->getPost('id_kategori_lecture'),
                    'fungsional'    => $this->request->getPost('fungsional'),
                    'prenama'            => $this->request->getPost('prenama'),
                    'slug_nama'    => strtolower(url_title($this->request->getVar('nama'))),
                    'nama'            => $this->request->getPost('nama'),
                    'postnama'            => $this->request->getPost('postnama'),
                    'jabatan'        => $this->request->getPost('jabatan'),
                    'pendidikan'        => $this->request->getPost('pendidikan'),
                    'telepon'        => $this->request->getPost('telepon'),
                    'sekofaku'        => $this->request->getPost('sekofaku'),
                    'email'            => $this->request->getPost('email'),
                    'keahlian'        => $this->request->getPost('keahlian'),
                    'project'        => $this->request->getPost('project'),
                    'publication'        => $this->request->getPost('publication'),
                    'hki'        => $this->request->getPost('hki'),
                    // 'gambar'		=> $namabaru,
                    'status_lecture'    => $this->request->getPost('status_lecture'),
                    'tempat_lahir'    => $this->request->getPost('tempat_lahir'),
                    'tanggal_lahir'    => date('Y-m-d', strtotime($this->request->getPost('tanggal_lahir'))),
                    'tanggal_post'    => date('Y-m-d H:i:s')
                ];
                $m_lecture->tambah($data);
                // masuk database
                $this->session->setFlashdata('sukses', 'Data telah ditambah');
                return redirect()->to(base_url('admin/lecture'));
            }
        } else {
            $data = [
                'title'            => 'Data lecture: ' . $total['total'],
                'lecture'            => $lecture,
                'kategori_lecture' => $kategori_lecture,
                'content'        => 'admin/lecture/index'
            ];
            echo view('admin/layout/wrapper', $data);
        }
    }

    // edit
    public function edit($id_lecture)
    {
        checklogin();
        $m_kategori_lecture     = new Kategori_lecture_model();
        $m_lecture             = new Lecture_model();
        $lecture                 = $m_lecture->detail($id_lecture);
        $kategori_lecture     = $m_kategori_lecture->listing();

        // Start validasi
        if ($this->request->getMethod() === 'post' && $this->validate(
            [
                'nama'         => 'required',
                'gambar'         => [
                    'mime_in[gambar,image/jpg,image/jpeg,image/gif,image/png]',
                    'max_size[gambar,4096]',
                ],
            ]
        )) {
            if (!empty($_FILES['gambar']['name'])) {
                // Image upload
                $avatar      = $this->request->getFile('gambar');
                $namabaru     = str_replace(' ', '-', $avatar->getName());
                $avatar->move(WRITEPATH . '../assets/upload/lecture/', $namabaru);
                // Create thumb
                $image = \Config\Services::image()
                    ->withFile(WRITEPATH . '../assets/upload/lecture/' . $namabaru)
                    ->fit(100, 100, 'center')
                    ->save(WRITEPATH . '../assets/upload/lecture/thumbs/' . $namabaru);
                // masuk database
                // masuk database
                $data = [
                    'id_lecture'        => $id_lecture,
                    'id_user'        => $this->session->get('id_user'),
                    'id_kategori_lecture'    => $this->request->getPost('id_kategori_lecture'),
                    'fungsional'    => $this->request->getPost('fungsional'),
                    'prenama'            => $this->request->getPost('prenama'),
                    'slug_nama'    => strtolower(url_title($this->request->getVar('nama'))),
                    'nama'            => $this->request->getPost('nama'),
                    'postnama'            => $this->request->getPost('postnama'),
                    'jabatan'        => $this->request->getPost('jabatan'),
                    'pendidikan'        => $this->request->getPost('pendidikan'),
                    'telepon'        => $this->request->getPost('telepon'),
                    'sekofaku'        => $this->request->getPost('sekofaku'),
                    'email'            => $this->request->getPost('email'),
                    'keahlian'        => $this->request->getPost('keahlian'),
                    'project'        => $this->request->getPost('project'),
                    'publication'        => $this->request->getPost('publication'),
                    'hki'        => $this->request->getPost('hki'),
                    'gambar'        => $namabaru,
                    'status_lecture'    => $this->request->getPost('status_lecture'),
                    'tempat_lahir'    => $this->request->getPost('tempat_lahir'),
                    'tanggal_lahir'    => date('Y-m-d', strtotime($this->request->getPost('tanggal_lahir'))),
                ];
                $m_lecture->edit($data);
                // masuk database
                $this->session->setFlashdata('sukses', 'Data telah disimpan');
                return redirect()->to(base_url('admin/lecture'));
            } else {
                // masuk database
                $data = [
                    'id_lecture'        => $id_lecture,
                    'id_user'        => $this->session->get('id_user'),
                    'id_kategori_lecture'    => $this->request->getPost('id_kategori_lecture'),
                    'fungsional'    => $this->request->getPost('fungsional'),
                    'prenama'            => $this->request->getPost('prenama'),
                    'slug_nama'    => strtolower(url_title($this->request->getVar('nama'))),
                    'nama'            => $this->request->getPost('nama'),
                    'postnama'            => $this->request->getPost('postnama'),
                    'jabatan'        => $this->request->getPost('jabatan'),
                    'pendidikan'        => $this->request->getPost('pendidikan'),
                    'telepon'        => $this->request->getPost('telepon'),
                    'sekofaku'        => $this->request->getPost('sekofaku'),
                    'email'            => $this->request->getPost('email'),
                    'keahlian'        => $this->request->getPost('keahlian'),
                    'project'        => $this->request->getPost('project'),
                    'publication'        => $this->request->getPost('publication'),
                    'hki'        => $this->request->getPost('hki'),
                    // 'gambar'		=> $namabaru,
                    'status_lecture'    => $this->request->getPost('status_lecture'),
                    'tempat_lahir'    => $this->request->getPost('tempat_lahir'),
                    'tanggal_lahir'    => date('Y-m-d', strtotime($this->request->getPost('tanggal_lahir'))),
                ];
                $m_lecture->edit($data);
                // masuk database
                $this->session->setFlashdata('sukses', 'Data telah disimpan');
                return redirect()->to(base_url('admin/lecture'));
            }
        } else {
            $data = [
                'title'            => 'Edit Data lecture: ' . $lecture['nama'],
                'lecture'            => $lecture,
                'kategori_lecture' => $kategori_lecture,
                'content'        => 'admin/lecture/edit'
            ];
            echo view('admin/layout/wrapper', $data);
        }
    }

    // delete
    public function delete($id_lecture)
    {
        checklogin();
        $m_lecture = new Lecture_model();
        $data = ['id_lecture'    => $id_lecture];
        $m_lecture->delete($data);
        // masuk database
        $this->session->setFlashdata('sukses', 'Data telah dihapus');
        return redirect()->to(base_url('admin/lecture'));
    }
}
