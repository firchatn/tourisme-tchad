<?php

namespace App\Models;

class HotelsModel extends \CodeIgniter\Model
{
    protected $table      = 'hotels';
    protected $primaryKey = 'id_hotels';
    protected $allowedFields = [
        'nom', 'ville',
    ];
    // protected $useTimestamps = true; // created_at, updated_at DATETIME
    // protected $useSoftDeletes = true; // deleted BOOL;
    protected $validationRules    = [
        'nom' => 'required',
        'ville' => 'required',
    ];
}
