<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Familie extends Model
{
    // zorgt ervoor dat je makkelijk testdata kan aanmaken
    use HasFactory;

    // alle velden die gezet worden als je :create gebruikt op deze model
    protected $fillable = [
        'naam',
        'adres',
    ];

    // dit functie geeft aan dat een familie meerdere familieleden kan hebben
    public function familieleden()
    {
        return $this->hasMany(Familielid::class);
    }
}
