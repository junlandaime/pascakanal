<?php

namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use App\Models\Kategori_lecture_model;

class Kategori_lecture extends BaseController
{

    // mainpage
    public function index()
    {
        checklogin();
        $m_kategori_lecture = new Kategori_lecture_model();
        $kategori_lecture     = $m_kategori_lecture->listing();
        $total         = $m_kategori_lecture->total();

        // Start validasi
        if ($this->request->getMethod() === 'post' && $this->validate(
            [
                'nama_kategori_lecture'     => 'required|min_length[3]|is_unique[kategori_lecture.nama_kategori_lecture]',
            ]
        )) {
            // masuk database
            $slug = url_title($this->request->getPost('nama_kategori_lecture'), '-', TRUE);
            $data = [
                'id_user'                    => $this->session->get('id_user'),
                'nama_kategori_lecture'    => $this->request->getPost('nama_kategori_lecture'),
                'slug_kategori_lecture'    => $slug,
                'urutan'                    => $this->request->getPost('urutan')
            ];
            $m_kategori_lecture->save($data);
            // masuk database
            $this->session->setFlashdata('sukses', 'Data telah ditambah');
            return redirect()->to(base_url('admin/kategori_lecture'));
        } else {
            $data = [
                'title'            => 'Kategori lecture: ' . $total['total'],
                'kategori_lecture'        => $kategori_lecture,
                'content'        => 'admin/kategori_lecture/index'
            ];
            echo view('admin/layout/wrapper', $data);
        }
    }

    // edit
    public function edit($id_kategori_lecture)
    {
        checklogin();
        $m_kategori_lecture = new Kategori_lecture_model();
        $kategori_lecture     = $m_kategori_lecture->detail($id_kategori_lecture);
        $total         = $m_kategori_lecture->total();

        // Start validasi
        if ($this->request->getMethod() === 'post' && $this->validate(
            [
                'nama_kategori_lecture'     => 'required|min_length[3]',
            ]
        )) {
            // masuk database
            $slug = url_title($this->request->getPost('nama_kategori_lecture'), '-', TRUE);
            $data = [
                'id_user'        => $this->session->get('id_user'),
                'nama_kategori_lecture'    => $this->request->getPost('nama_kategori_lecture'),
                'slug_kategori_lecture'    => $slug,
                'urutan'        => $this->request->getPost('urutan')
            ];
            $m_kategori_lecture->update($id_kategori_lecture, $data);
            // masuk database
            $this->session->setFlashdata('sukses', 'Data telah diedit');
            return redirect()->to(base_url('admin/kategori_lecture'));
        } else {
            $data = [
                'title'                    => 'Edit Kategori lecture: ' . $kategori_lecture['nama_kategori_lecture'],
                'kategori_lecture'        => $kategori_lecture,
                'content'                => 'admin/kategori_lecture/edit'
            ];
            echo view('admin/layout/wrapper', $data);
        }
    }

    // delete
    public function delete($id_kategori_lecture)
    {
        checklogin();
        $m_kategori_lecture = new Kategori_lecture_model();
        $data = ['id_kategori_lecture'    => $id_kategori_lecture];
        $m_kategori_lecture->delete($data);
        // masuk database
        $this->session->setFlashdata('sukses', 'Data telah dihapus');
        return redirect()->to(base_url('admin/kategori_lecture'));
    }
}
