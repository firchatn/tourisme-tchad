<?php

namespace App\Models;

class AgenceModel extends \CodeIgniter\Model
{
    protected $table      = 'agence';
    protected $primaryKey = 'id_agence';
    protected $allowedFields = [
        'nom', 'ville', 'quartier',
    ];
    // protected $useTimestamps = true; // created_at, updated_at DATETIME
    // protected $useSoftDeletes = true; // deleted BOOL;
    protected $validationRules    = [
        'nom' => 'required',
        'ville' => 'required',
        'quartier' => 'required',
    ];
}
