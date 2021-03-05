<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = 'catalogoEstatus';

    protected $primaryKey = 'idcatalogoEstatus';

    protected $fillable = [
        'estatus'
    ];
}
