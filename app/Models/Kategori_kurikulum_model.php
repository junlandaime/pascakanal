<?php

namespace App\Models;

use CodeIgniter\Model;

class Kategori_kurikulum_model extends Model
{
    protected $table = 'kategori_kurikulum';
    protected $primaryKey = 'id_kategori_kurikulum';

    protected $returnType = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id_kategori_kurikulum', 'id_user', 'nama_kategori_kurikulum', 'slug_kategori_kurikulum', 'urutan', 'hits'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    // listing
    public function listing()
    {
        $builder = $this->db->table('kategori_kurikulum');
        $builder->orderBy('kategori_kurikulum.urutan', 'ASC');
        $query = $builder->get();
        return $query->getResultArray();
    }

    // total
    public function total()
    {
        $builder = $this->db->table('kategori_kurikulum');
        $builder->select('COUNT(*) AS total');
        $builder->orderBy('kategori_kurikulum.id_kategori_kurikulum', 'DESC');
        $query = $builder->get();
        return $query->getRowArray();
    }

    // detail
    public function detail($id_kategori_kurikulum)
    {
        $builder = $this->db->table('kategori_kurikulum');
        $builder->where('id_kategori_kurikulum', $id_kategori_kurikulum);
        $builder->orderBy('kategori_kurikulum.id_kategori_kurikulum', 'DESC');
        $query = $builder->get();
        return $query->getRowArray();
    }

    // read
    public function read($slug_kategori_kurikulum)
    {
        $builder = $this->db->table('kategori_kurikulum');
        $builder->where('slug_kategori_kurikulum', $slug_kategori_kurikulum);
        $builder->orderBy('kategori_kurikulum.id_kategori_kurikulum', 'DESC');
        $query = $builder->get();
        return $query->getRowArray();
    }
}
