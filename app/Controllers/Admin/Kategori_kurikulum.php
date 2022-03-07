<?php

namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use App\Models\Kategori_kurikulum_model;

class Kategori_kurikulum extends BaseController
{

    // mainpage
    public function index()
    {
        checklogin();
        $m_kategori_kurikulum = new Kategori_kurikulum_model();
        $kategori_kurikulum     = $m_kategori_kurikulum->listing();
        $total         = $m_kategori_kurikulum->total();

        // Start validasi
        if ($this->request->getMethod() === 'post' && $this->validate(
            [
                'nama_kategori_kurikulum'     => 'required|min_length[3]|is_unique[kategori_kurikulum.nama_kategori_kurikulum]',
            ]
        )) {
            // masuk database
            $slug = url_title($this->request->getPost('nama_kategori_kurikulum'), '-', TRUE);
            $data = [
                'id_user'                    => $this->session->get('id_user'),
                'nama_kategori_kurikulum'    => $this->request->getPost('nama_kategori_kurikulum'),
                'slug_kategori_kurikulum'    => $slug,
                'urutan'                    => $this->request->getPost('urutan')
            ];
            $m_kategori_kurikulum->save($data);
            // masuk database
            $this->session->setFlashdata('sukses', 'Data telah ditambah');
            return redirect()->to(base_url('admin/kategori_kurikulum'));
        } else {
            $data = [
                'title'            => 'Kategori kurikulum: ' . $total['total'],
                'kategori_kurikulum'        => $kategori_kurikulum,
                'content'        => 'admin/kategori_kurikulum/index'
            ];
            echo view('admin/layout/wrapper', $data);
        }
    }

    // edit
    public function edit($id_kategori_kurikulum)
    {
        checklogin();
        $m_kategori_kurikulum = new Kategori_kurikulum_model();
        $kategori_kurikulum     = $m_kategori_kurikulum->detail($id_kategori_kurikulum);
        $total         = $m_kategori_kurikulum->total();

        // Start validasi
        if ($this->request->getMethod() === 'post' && $this->validate(
            [
                'nama_kategori_kurikulum'     => 'required|min_length[3]',
            ]
        )) {
            // masuk database
            $slug = url_title($this->request->getPost('nama_kategori_kurikulum'), '-', TRUE);
            $data = [
                'id_user'        => $this->session->get('id_user'),
                'nama_kategori_kurikulum'    => $this->request->getPost('nama_kategori_kurikulum'),
                'slug_kategori_kurikulum'    => $slug,
                'urutan'        => $this->request->getPost('urutan')
            ];
            $m_kategori_kurikulum->update($id_kategori_kurikulum, $data);
            // masuk database
            $this->session->setFlashdata('sukses', 'Data telah diedit');
            return redirect()->to(base_url('admin/kategori_kurikulum'));
        } else {
            $data = [
                'title'                    => 'Edit Kategori kurikulum: ' . $kategori_kurikulum['nama_kategori_kurikulum'],
                'kategori_kurikulum'        => $kategori_kurikulum,
                'content'                => 'admin/kategori_kurikulum/edit'
            ];
            echo view('admin/layout/wrapper', $data);
        }
    }

    // delete
    public function delete($id_kategori_kurikulum)
    {
        checklogin();
        $m_kategori_kurikulum = new Kategori_kurikulum_model();
        $data = ['id_kategori_kurikulum'    => $id_kategori_kurikulum];
        $m_kategori_kurikulum->delete($data);
        // masuk database
        $this->session->setFlashdata('sukses', 'Data telah dihapus');
        return redirect()->to(base_url('admin/kategori_kurikulum'));
    }
}
