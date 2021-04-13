<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = 'reqrecluta';

    protected $primaryKey = 'idreqRecluta';

    protected $fillable = [
        'tipoPeticion',
        'descripcion',
        'emailCliente',
        'idUsuario',
        'fecha',
        'idEstatus',
        'fechaResuelto',
        'fechaProceso',
        'comentarios',
        'etapa',
        'comentarioTan',
        'archivo'
    ];
}
