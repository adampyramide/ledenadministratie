<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boekjaar extends Model
{
    use HasFactory;

    protected $table = 'boekjaren'; // tabel heet anders dan standaard meervoud

    protected $fillable = [
        'jaar',
    ];

    public function contributies()
    {
        return $this->hasMany(Contributie::class);
    }
}
