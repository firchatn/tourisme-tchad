<?php

namespace App\Models;

class LocationVoituresModel extends \CodeIgniter\Model
{
    protected $table      = 'location_voitures';
    protected $primaryKey = 'id_locationvoiture';
    protected $allowedFields = [
        'libelle', 'date', 'prix', 'marque',
    ];
    // protected $useTimestamps = true; // created_at, updated_at DATETIME
    // protected $useSoftDeletes = true; // deleted BOOL;
    protected $validationRules    = [
        'libelle' => 'required|alpha_numeric',
        'date' => 'required|valid_date',
        'prix' => 'required|decimal',
        'marque' => 'required',
    ];
}
