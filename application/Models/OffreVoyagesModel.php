<?php

namespace App\Models;

class OffreVoyagesModel extends \CodeIgniter\Model
{
    protected $table      = 'offre_voyages';
    protected $primaryKey = 'id_offrevoyages';
    protected $allowedFields = [
        'libelle', 'description'
    ];
    // protected $useTimestamps = true; // created_at, updated_at DATETIME
    // protected $useSoftDeletes = true; // deleted BOOL;
    protected $validationRules    = [
        'libelle' => 'required|alpha_numeric',
        'description' => 'required',
    ];
}
