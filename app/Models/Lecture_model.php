<?php

namespace App\Models;

use CodeIgniter\Model;

class Lecture_model extends Model
{

    protected $table = 'lecture';
    protected $primaryKey = 'id_lecture';
    protected $allowedFields = [];

    // Listing
    public function listing()
    {
        $builder = $this->db->table('lecture');
        $builder->select('lecture.*, kategori_lecture.nama_kategori_lecture, kategori_lecture.slug_kategori_lecture, users.nama AS nama_admin');
        $builder->join('kategori_lecture', 'kategori_lecture.id_kategori_lecture = lecture.id_kategori_lecture', 'LEFT');
        $builder->join('users', 'users.id_user = lecture.id_user', 'LEFT');
        $builder->orderBy('nama', 'ASC');
        $query = $builder->get();
        return $query->getResultArray();
    }

    // lecture
    public function kategori_lecture($id_kategori_lecture)
    {
        $builder = $this->db->table('lecture');
        $builder->select('lecture.*, kategori_lecture.nama_kategori_lecture, kategori_lecture.slug_kategori_lecture, users.nama AS nama_admin');
        $builder->join('kategori_lecture', 'kategori_lecture.id_kategori_lecture = lecture.id_kategori_lecture', 'LEFT');
        $builder->join('users', 'users.id_user = lecture.id_user', 'LEFT');
        $builder->where('lecture.id_kategori_lecture', $id_kategori_lecture);
        $builder->orderBy('lecture.urutan', 'ASC');
        $query = $builder->get();
        return $query->getResultArray();
    }

    // home
    public function home()
    {
        $builder = $this->db->table('lecture');
        $builder->select('lecture.*, kategori_lecture.nama_kategori_lecture, kategori_lecture.slug_kategori_lecture, users.nama AS nama_admin, urutan');
        $builder->join('kategori_lecture', 'kategori_lecture.id_kategori_lecture = lecture.id_kategori_lecture', 'LEFT');
        $builder->join('users', 'users.id_user = lecture.id_user', 'LEFT');
        $builder->where('lecture.status_lecture', 'Publish');
        $builder->orderBy('lecture.id_lecture', 'DESC');
        $query = $builder->get();
        return $query->getResultArray();
    }

    // total
    public function total()
    {
        $builder = $this->db->table('lecture');
        $query = $builder->get();
        return $query->getNumRows();
    }

    // detail
    public function detail($slug_nama)
    {
        $builder = $this->db->table('lecture');
        $builder->select('lecture.*, kategori_lecture.nama_kategori_lecture, kategori_lecture.slug_kategori_lecture, users.nama AS nama_admin');
        $builder->join('kategori_lecture', 'kategori_lecture.id_kategori_lecture = lecture.id_kategori_lecture', 'LEFT');
        $builder->join('users', 'users.id_user = lecture.id_user', 'LEFT');
        $builder->where('lecture.slug_nama', $slug_nama);
        $builder->orderBy('lecture.slug_nama', 'DESC');
        $query = $builder->get();
        return $query->getRowArray();
    }

    // tambah
    public function tambah($data)
    {
        $builder = $this->db->table('lecture');
        $builder->insert($data);
    }

    // tambah
    public function edit($data)
    {
        $builder = $this->db->table('lecture');
        $builder->where('id_lecture', $data['id_lecture']);
        $builder->update($data);
    }

    // slider
    public function slider()
    {
        $builder = $this->db->table('lecture');
        $builder->where('jenis_lecture', 'Homepage');
        $builder->orderBy('lecture.id_lecture', 'DESC');
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function posting()
    {
        $builder = $this->db->table('lecture');
        $builder->select('lecture.*, kategori_lecture.nama_kategori_lecture, kategori_lecture.slug_kategori_lecture, users.nama AS nama_admin');
        $builder->join('kategori_lecture', 'kategori_lecture.id_kategori_lecture = lecture.id_kategori_lecture', 'LEFT');
        $builder->join('users', 'users.id_user = lecture.id_user', 'LEFT');
        $builder->orderBy('nama', 'ASC');
        $query = $builder->get();
        return $query->getResultArray();
    }
}
