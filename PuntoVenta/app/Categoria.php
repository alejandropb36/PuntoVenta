<?php

namespace PuntoVenta;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table='categoria';

    protected $primaryKey='idcategoria';

    public $timestamps = false;

    protected $fillabel = [
    	'nombre',
    	'descripcion',
    	'condicion'
    ];

}
