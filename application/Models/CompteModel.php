<?php

namespace App\Models;

class CompteModel extends \CodeIgniter\Model
{
    protected $table      = 'compte';
    protected $primaryKey = 'id_compte';
    protected $allowedFields = [
        'login', 'password',
    ];
    // protected $useTimestamps = true; // created_at, updated_at DATETIME
    // protected $useSoftDeletes = true; // deleted BOOL;
    protected $validationRules    = [
        'login' => 'required|is_unique',
        'password' => 'required|min_length[4]',
    ];
}
