<?php

namespace App\Models;

class ContactModel extends \CodeIgniter\Model
{
    protected $table      = 'contact';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nom', 'email', 'message', 'tel', 'adresse'
    ];
    // protected $useTimestamps = true; // created_at, updated_at DATETIME
    // protected $useSoftDeletes = true; // deleted BOOL;
    protected $validationRules    = [
        'nom' => 'required',
        'email' => 'required|valid_email|is_unique',
        'message' => 'required',
        'tel' => 'required',
        'adresse' => 'required',
    ];
}
