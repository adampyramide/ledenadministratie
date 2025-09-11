<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contributie extends Model
{
    use HasFactory;

    protected $fillable = [
        'familielid_id',
        'soort_lid_id',
        'boekjaar_id',
        'leeftijd',
        'bedrag',
    ];

    public function familielid()
    {
        return $this->belongsTo(Familielid::class);
    }

    public function soortLid()
    {
        return $this->belongsTo(SoortLid::class);
    }

    public function boekjaar()
    {
        return $this->belongsTo(Boekjaar::class);
    }
}
