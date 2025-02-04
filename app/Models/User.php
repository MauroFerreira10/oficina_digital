<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    const ADMIN = 'admin';
    const SECRETARIO = 'secretario';
    const TECNICO = 'tecnico';
    const CLIENTE = 'cliente';
    const GERENTE = 'gerente';

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    public function isAdmin()
    {
        return $this->role === self::ADMIN;
    }

    public function isSecretario()
    {
        return $this->role === self::SECRETARIO;
    }

    public function isTecnico()
    {
        return $this->role === self::TECNICO;
    }

    public function isCliente()
    {
        return $this->role === self::CLIENTE;
    }

    public function isGerente()
    {
        return $this->role === self::GERENTE;
    }
}
