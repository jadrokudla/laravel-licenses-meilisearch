<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kontakt extends Model
{
    protected $table = 'kontakty';
    protected $fillable = ['meno', 'email', 'telefone_cislo', 'description']; 
}

