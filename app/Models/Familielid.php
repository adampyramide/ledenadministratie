<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Familielid extends Model
{
    use HasFactory;

    protected $table = 'familie_leden'; // tabel heet anders dan standaard meervoud

    protected $fillable = [
        'naam',
        'geboortedatum',
        'familie_id',
        'soort_lid_id',
    ];

    public function familie()
    {
        return $this->belongsTo(Familie::class);
    }

    public function soortLid()
    {
        return $this->belongsTo(SoortLid::class);
    }

    public function contributies()
    {
        return $this->hasMany(Contributie::class);
    }
}
