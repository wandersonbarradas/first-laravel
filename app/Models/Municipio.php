<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $fillable = [
        "razao_social", "nome_fantasia", "cnpj", "logradouro", "numero", "complemento", "bairro", "cidade", "estado", "active", "obs"
    ];
    use HasFactory;
}
