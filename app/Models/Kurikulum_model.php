<?php

namespace App\Models;

use CodeIgniter\Model;

class kurikulum_model extends Model
{

    protected $table = 'kurikulum';
    protected $primaryKey = 'id_kurikulum';
    protected $allowedFields = [];

    // Listing
    public function listing()
    {
        $builder = $this->db->table('kurikulum');
        $builder->select('kurikulum.*, kategori_kurikulum.nama_kategori_kurikulum, kategori_kurikulum.slug_kategori_kurikulum, users.nama AS nama_admin');
        $builder->join('kategori_kurikulum', 'kategori_kurikulum.id_kategori_kurikulum = kurikulum.id_kategori_kurikulum', 'LEFT');
        $builder->join('users', 'users.id_user = kurikulum.id_user', 'LEFT');
        $builder->orderBy('kurikulum.id_kurikulum', 'DESC');
        $query = $builder->get();
        return $query->getResultArray();
    }

    // kurikulum
    public function kategori_kurikulum($id_kategori_kurikulum)
    {
        $builder = $this->db->table('kurikulum');
        $builder->select('kurikulum.*, kategori_kurikulum.nama_kategori_kurikulum, kategori_kurikulum.slug_kategori_kurikulum, users.nama AS nama_admin');
        $builder->join('kategori_kurikulum', 'kategori_kurikulum.id_kategori_kurikulum = kurikulum.id_kategori_kurikulum', 'LEFT');
        $builder->join('users', 'users.id_user = kurikulum.id_user', 'LEFT');
        $builder->where('kurikulum.id_kategori_kurikulum', $id_kategori_kurikulum);
        $builder->orderBy('kurikulum.urutan', 'ASC');
        $query = $builder->get();
        return $query->getResultArray();
    }

    // home
    public function home()
    {
        $builder = $this->db->table('kurikulum');
        $builder->select('kurikulum.*, kategori_kurikulum.nama_kategori_kurikulum, kategori_kurikulum.slug_kategori_kurikulum, users.nama AS nama_admin, urutan');
        $builder->join('kategori_kurikulum', 'kategori_kurikulum.id_kategori_kurikulum = kurikulum.id_kategori_kurikulum', 'LEFT');
        $builder->join('users', 'users.id_user = kurikulum.id_user', 'LEFT');
        $builder->where('kurikulum.status_kurikulum', 'Publish');
        $builder->orderBy('kurikulum.id_kurikulum', 'DESC');
        $query = $builder->get();
        return $query->getResultArray();
    }

    // total
    public function total()
    {
        $builder = $this->db->table('kurikulum');
        $query = $builder->get();
        return $query->getNumRows();
    }

    // detail
    public function detail($id_kurikulum)
    {
        $builder = $this->db->table('kurikulum');
        $builder->select('kurikulum.*, kategori_kurikulum.nama_kategori_kurikulum, kategori_kurikulum.slug_kategori_kurikulum, users.nama AS nama_admin');
        $builder->join('kategori_kurikulum', 'kategori_kurikulum.id_kategori_kurikulum = kurikulum.id_kategori_kurikulum', 'LEFT');
        $builder->join('users', 'users.id_user = kurikulum.id_user', 'LEFT');
        $builder->where('kurikulum.id_kurikulum', $id_kurikulum);
        $builder->orderBy('kurikulum.id_kurikulum', 'DESC');
        $query = $builder->get();
        return $query->getRowArray();
    }

    public function detail2($slug_namam)
    {
        $builder = $this->db->table('kurikulum');
        $builder->select('kurikulum.*, kategori_kurikulum.nama_kategori_kurikulum, kategori_kurikulum.slug_kategori_kurikulum, users.nama AS nama_admin');
        $builder->join('kategori_kurikulum', 'kategori_kurikulum.id_kategori_kurikulum = kurikulum.id_kategori_kurikulum', 'LEFT');
        $builder->join('users', 'users.id_user = kurikulum.id_user', 'LEFT');
        $builder->where('kurikulum.slug_namam', $slug_namam);
        $builder->orderBy('kurikulum.id_kurikulum', 'DESC');
        $query = $builder->get();
        return $query->getRowArray();
    }

    // tambah
    public function tambah($data)
    {
        $builder = $this->db->table('kurikulum');
        $builder->insert($data);
    }

    // tambah
    public function edit($data)
    {
        $builder = $this->db->table('kurikulum');
        $builder->where('id_kurikulum', $data['id_kurikulum']);
        $builder->update($data);
    }

    // slider
    public function slider()
    {
        $builder = $this->db->table('galeri');
        $builder->where('jenis_galeri', 'Homepage');
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function posting()
    {
        $builder = $this->db->table('kurikulum');
        $builder->select('kurikulum.*, kategori_kurikulum.nama_kategori_kurikulum, kategori_kurikulum.slug_kategori_kurikulum, users.nama AS nama_admin');
        $builder->join('kategori_kurikulum', 'kategori_kurikulum.id_kategori_kurikulum = kurikulum.id_kategori_kurikulum', 'LEFT');
        $builder->join('users', 'users.id_user = kurikulum.id_user', 'LEFT');
        $builder->orderBy('kurikulum.id_kurikulum', 'DESC');
        $query = $builder->get();
        return $query->getResultArray();
    }
}
