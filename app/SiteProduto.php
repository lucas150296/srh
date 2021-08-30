<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteProduto extends Model
{
    protected $fillable = ['nome', 'descricao', 'peso', 'preco_venada'];
}
