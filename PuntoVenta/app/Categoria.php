<?php

namespace PuntoVenta;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protectec $table = 'categoria';

    protectec $primaryKey = 'idcategoria';

    public $timestamps = false;

    protectec $fillabel = [
    	'nombre',
    	'descripcion',
    	'condicion'
    ];

}
