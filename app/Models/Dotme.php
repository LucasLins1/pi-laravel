<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dotme extends Model
{
    use HasFactory;

    protected $fillable = [
        "nome",
        "Data_nasc",
        "CPF",
        "Telefone",
        "Email",
        "Senha",
    ];
}
