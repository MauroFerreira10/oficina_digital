<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viatura extends Model
{
    use HasFactory;

    protected $fillable = [
        'marca', 'modelo', 'cor', 'tipo', 'estado', 'tipo_avaria', 'codigo_validacao', 'user_id',
    ];
    protected static function boot()
{
    parent::boot();

    static::creating(function ($viatura) {
        if (empty($viatura->codigo_validacao)) {
            $viatura->codigo_validacao = strtoupper(substr(md5(uniqid()), 0, 10));
        }
    });
}

    
    
}
