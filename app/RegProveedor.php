<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegProveedor extends Model
{
    protected $table='proveedor';
    protected $primaryKey='id';

    public $timestamps=false;

    protected $fillable = [
    	'correo',
        'password',
        'proveedor',
        'telefono',
        'direccion',
        'privilegio'
    ];
    protected $guarded =[

    ];
}
//--registrar proveedor ruta para REGISTRO DE PROVEEDORES 15-02-18 !!Daniel Alanis
