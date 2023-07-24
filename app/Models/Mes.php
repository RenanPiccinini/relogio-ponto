<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mes extends Model
{
    use HasFactory;

    protected $dates = ['data_calendario'];

    protected $fillable = [
        'user_id',
        'horario1',
        'horario2',
        'tempo_total',
        'data_calendario'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
