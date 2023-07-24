<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;

    protected $fillable = [
        'horario1',
        'horario2',
        'tempo_total',
        'data_calendario'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // public function mes()
    // {
    //     return $this->belongsToMany(Mes::class);
    // }
}
