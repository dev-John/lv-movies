<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    // Nome da tabela
    protected $table = 'filmes';
    // PK
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
}
