<?php

namespace App\Models;

class SiteTouristiqueModel extends \CodeIgniter\Model
{
    protected $table      = 'site_touristique';
    protected $primaryKey = 'id_sitetouristique';
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
