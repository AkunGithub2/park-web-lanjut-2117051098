<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'user';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama','npm','id_kelas'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'nama'=>['rules'=>'required',
                'errors'=>['required'=>'Nama harus diiisi']],
        'npm'=>[
            'rules'=>'required|is_unique[user.npm]|max_length[10]|min_length[10]',
            'errors'=>['required'=>'Npm harus diiisi','is_unique'=>'npm ini sudah ada','max_length'=>'npm lebih','min_length'=>'npm kurang']
        ],
        'kelas'=>[
            'rules'=>'required',
            'errors'=>['required'=>'Kelas harus diiisi']
        ],
    ];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function saveUser($data){
        $this->insert($data);
    }
}