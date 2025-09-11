<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoortLid extends Model
{
    use HasFactory;

    protected $table = 'soorten_leden'; // tabel heet anders dan standaard meervoud

    protected $fillable = [
        'omschrijving',
    ];

    public function familieleden()
    {
        return $this->hasMany(Familielid::class);
    }

    public function contributies()
    {
        return $this->hasMany(Contributie::class);
    }
}
