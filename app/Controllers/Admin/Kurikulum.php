<?php

namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use App\Models\Kurikulum_model;
use App\Models\Kategori_kurikulum_model;

class kurikulum extends BaseController
{

    // mainpage
    public function index()
    {
        checklogin();
        $m_kurikulum             = new Kurikulum_model();
        $m_kategori_kurikulum     = new Kategori_kurikulum_model();
        $kurikulum                 = $m_kurikulum->listing();
        $total                 = $m_kurikulum->total();
        $kategori_kurikulum     = $m_kategori_kurikulum->listing();


        // Start validasi
        if ($this->request->getMethod() === 'post' && $this->validate(
            [
                'namam'         => 'required',
                'gambar'         => [
                    'mime_in[gambar,image/jpg,image/jpeg,image/gif,image/png,application/pdf,application/doc,application/msword,application/xls,application/xlsx,application/ppt,application/pptx]',
                    'max_size[gambar,4096]',
                ],
            ]
        )) {
            if (!empty($_FILES['gambar']['name'])) {
                // Image upload
                $avatar      = $this->request->getFile('gambar');
                $namabaru     = str_replace(' ', '-', $avatar->getName());
                $avatar->move(WRITEPATH . '../assets/upload/kurikulum/', $namabaru);

                // masuk database
                $data = [
                    'id_user'        => $this->session->get('id_user'),
                    'id_kategori_kurikulum'    => $this->request->getPost('id_kategori_kurikulum'),
                    'kodem'    => $this->request->getPost('kodem'),
                    'namam'            => $this->request->getPost('namam'),
                    'naming'            => $this->request->getPost('naming'),
                    'jumsks'            => $this->request->getPost('jumsks'),
                    'kodep'        => $this->request->getPost('kodep'),
                    'namap'        => $this->request->getPost('namap'),
                    'fakul'        => $this->request->getPost('fakul'),
                    'silring'        => $this->request->getPost('silring'),
                    'silriing'            => $this->request->getPost('silriing'),
                    'silleng'        => $this->request->getPost('silleng'),
                    'silling'        => $this->request->getPost('silling'),
                    'luaran'        => $this->request->getPost('luaran'),
                    'matkulit'        => $this->request->getPost('matkulit'),
                    'penunjang'        => $this->request->getPost('penunjang'),
                    'pustaka'        => $this->request->getPost('pustaka'),
                    'penilaian'        => $this->request->getPost('penilaian'),
                    'tambahan'        => $this->request->getPost('tambahan'),
                    'gambar'        => $namabaru,
                    'status_kurikulum'    => $this->request->getPost('status_kurikulum'),
                    'tempat_lahir'    => $this->request->getPost('tempat_lahir'),
                    'tanggal_lahir'    => date('Y-m-d', strtotime($this->request->getPost('tanggal_lahir'))),
                    'tanggal_post'    => date('Y-m-d H:i:s')
                ];
                $m_kurikulum->tambah($data);
                // masuk database
                $this->session->setFlashdata('sukses', 'Data telah ditambah');
                return redirect()->to(base_url('admin/kurikulum'));
            } else {
                // masuk database
                $data = [
                    'id_user'        => $this->session->get('id_user'),
                    'id_kategori_kurikulum'    => $this->request->getPost('id_kategori_kurikulum'),
                    'kodem'    => $this->request->getPost('kodem'),
                    'namam'            => $this->request->getPost('namam'),
                    'naming'            => $this->request->getPost('naming'),
                    'jumsks'            => $this->request->getPost('jumsks'),
                    'kodep'        => $this->request->getPost('kodep'),
                    'namap'        => $this->request->getPost('namap'),
                    'fakul'        => $this->request->getPost('fakul'),
                    'silring'        => $this->request->getPost('silring'),
                    'silriing'            => $this->request->getPost('silriing'),
                    'silleng'        => $this->request->getPost('silleng'),
                    'silling'        => $this->request->getPost('silling'),
                    'luaran'        => $this->request->getPost('luaran'),
                    'matkulit'        => $this->request->getPost('matkulit'),
                    'penunjang'        => $this->request->getPost('penunjang'),
                    'pustaka'        => $this->request->getPost('pustaka'),
                    'penilaian'        => $this->request->getPost('penilaian'),
                    'tambahan'        => $this->request->getPost('tambahan'),
                    // 'gambar'        => $namabaru,
                    'status_kurikulum'    => $this->request->getPost('status_kurikulum'),
                    'tempat_lahir'    => $this->request->getPost('tempat_lahir'),
                    'tanggal_lahir'    => date('Y-m-d', strtotime($this->request->getPost('tanggal_lahir'))),
                    'tanggal_post'    => date('Y-m-d H:i:s')
                ];
                $m_kurikulum->tambah($data);
                // masuk database
                $this->session->setFlashdata('sukses', 'Data telah ditambah');
                return redirect()->to(base_url('admin/kurikulum'));
            }
        } else {
            $data = [
                'title'            => 'Data kurikulum: ' . $total['total'],
                'kurikulum'            => $kurikulum,
                'kategori_kurikulum' => $kategori_kurikulum,
                'content'        => 'admin/kurikulum/index'
            ];
            echo view('admin/layout/wrapper', $data);
        }
    }

    // edit
    public function edit($id_kurikulum)
    {
        checklogin();
        $m_kategori_kurikulum     = new Kategori_kurikulum_model();
        $m_kurikulum             = new kurikulum_model();
        $kurikulum                 = $m_kurikulum->detail($id_kurikulum);
        $kategori_kurikulum     = $m_kategori_kurikulum->listing();

        // Start validasi
        if ($this->request->getMethod() === 'post' && $this->validate(
            [
                'namam'         => 'required',
                'gambar'         => [
                    'mime_in[gambar,image/jpg,image/jpeg,image/gif,image/png,application/pdf,application/doc,application/msword,application/xls,application/xlsx,application/ppt,application/pptx]',
                    'max_size[gambar,4096]',
                ],
            ]
        )) {
            if (!empty($_FILES['gambar']['name'])) {
                // Image upload
                $avatar      = $this->request->getFile('gambar');
                $namabaru     = str_replace(' ', '-', $avatar->getName());
                $avatar->move(WRITEPATH . '../assets/upload/kurikulum/', $namabaru);

                // masuk database
                $data = [
                    'id_kurikulum'        => $id_kurikulum,
                    'id_user'        => $this->session->get('id_user'),
                    'id_kategori_kurikulum'    => $this->request->getPost('id_kategori_kurikulum'),
                    'kodem'    => $this->request->getPost('kodem'),
                    'namam'            => $this->request->getPost('namam'),
                    'naming'            => $this->request->getPost('naming'),
                    'jumsks'            => $this->request->getPost('jumsks'),
                    'kodep'        => $this->request->getPost('kodep'),
                    'namap'        => $this->request->getPost('namap'),
                    'fakul'        => $this->request->getPost('fakul'),
                    'silring'        => $this->request->getPost('silring'),
                    'silriing'            => $this->request->getPost('silriing'),
                    'silleng'        => $this->request->getPost('silleng'),
                    'silling'        => $this->request->getPost('silling'),
                    'luaran'        => $this->request->getPost('luaran'),
                    'matkulit'        => $this->request->getPost('matkulit'),
                    'penunjang'        => $this->request->getPost('penunjang'),
                    'pustaka'        => $this->request->getPost('pustaka'),
                    'penilaian'        => $this->request->getPost('penilaian'),
                    'tambahan'        => $this->request->getPost('tambahan'),
                    'gambar'        => $namabaru,
                    'status_kurikulum'    => $this->request->getPost('status_kurikulum'),
                    'tempat_lahir'    => $this->request->getPost('tempat_lahir'),
                    'tanggal_lahir'    => date('Y-m-d', strtotime($this->request->getPost('tanggal_lahir'))),
                ];
                $m_kurikulum->edit($data);
                // masuk database
                $this->session->setFlashdata('sukses', 'Data telah disimpan');
                return redirect()->to(base_url('admin/kurikulum'));
            } else {
                // masuk database
                $data = [
                    'id_kurikulum'        => $id_kurikulum,
                    'id_user'        => $this->session->get('id_user'),
                    'id_kategori_kurikulum'    => $this->request->getPost('id_kategori_kurikulum'),
                    'kodem'    => $this->request->getPost('kodem'),
                    'namam'            => $this->request->getPost('namam'),
                    'naming'            => $this->request->getPost('naming'),
                    'jumsks'            => $this->request->getPost('jumsks'),
                    'kodep'        => $this->request->getPost('kodep'),
                    'namap'        => $this->request->getPost('namap'),
                    'fakul'        => $this->request->getPost('fakul'),
                    'silring'        => $this->request->getPost('silring'),
                    'silriing'            => $this->request->getPost('silriing'),
                    'silleng'        => $this->request->getPost('silleng'),
                    'silling'        => $this->request->getPost('silling'),
                    'luaran'        => $this->request->getPost('luaran'),
                    'matkulit'        => $this->request->getPost('matkulit'),
                    'penunjang'        => $this->request->getPost('penunjang'),
                    'pustaka'        => $this->request->getPost('pustaka'),
                    'penilaian'        => $this->request->getPost('penilaian'),
                    'tambahan'        => $this->request->getPost('tambahan'),
                    // 'gambar'        => $namabaru,
                    'status_kurikulum'    => $this->request->getPost('status_kurikulum'),
                    'tempat_lahir'    => $this->request->getPost('tempat_lahir'),
                    'tanggal_lahir'    => date('Y-m-d', strtotime($this->request->getPost('tanggal_lahir'))),
                ];
                $m_kurikulum->edit($data);
                // masuk database
                $this->session->setFlashdata('sukses', 'Data telah disimpan');
                return redirect()->to(base_url('admin/kurikulum'));
            }
        } else {
            $data = [
                'title'            => 'Edit Data kurikulum: ' . $kurikulum['namam'],
                'kurikulum'            => $kurikulum,
                'kategori_kurikulum' => $kategori_kurikulum,
                'content'        => 'admin/kurikulum/edit'
            ];
            echo view('admin/layout/wrapper', $data);
        }
    }

    // delete
    public function delete($id_kurikulum)
    {
        checklogin();
        $m_kurikulum = new kurikulum_model();
        $data = ['id_kurikulum'    => $id_kurikulum];
        $m_kurikulum->delete($data);
        // masuk database
        $this->session->setFlashdata('sukses', 'Data telah dihapus');
        return redirect()->to(base_url('admin/kurikulum'));
    }
}
