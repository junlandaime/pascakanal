<?php

namespace App\Models;

use CodeIgniter\Model;

class Kategori_lecture_model extends Model
{
    protected $table = 'kategori_lecture';
    protected $primaryKey = 'id_kategori_lecture';

    protected $returnType = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id_kategori_lecture', 'id_user', 'nama_kategori_lecture', 'slug_kategori_lecture', 'urutan', 'hits'];

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
        $builder = $this->db->table('kategori_lecture');
        $builder->orderBy('kategori_lecture.urutan', 'ASC');
        $query = $builder->get();
        return $query->getResultArray();
    }

    // total
    public function total()
    {
        $builder = $this->db->table('kategori_lecture');
        $builder->select('COUNT(*) AS total');
        $builder->orderBy('kategori_lecture.id_kategori_lecture', 'DESC');
        $query = $builder->get();
        return $query->getRowArray();
    }

    // detail
    public function detail($id_kategori_lecture)
    {
        $builder = $this->db->table('kategori_lecture');
        $builder->where('id_kategori_lecture', $id_kategori_lecture);
        $builder->orderBy('kategori_lecture.id_kategori_lecture', 'DESC');
        $query = $builder->get();
        return $query->getRowArray();
    }

    // read
    public function read($slug_kategori_lecture)
    {
        $builder = $this->db->table('kategori_lecture');
        $builder->where('slug_kategori_lecture', $slug_kategori_lecture);
        $builder->orderBy('kategori_lecture.id_kategori_lecture', 'DESC');
        $query = $builder->get();
        return $query->getRowArray();
    }
}
