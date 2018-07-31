<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
 protected $table = 'proveedor';



 protected $fillable = ['ci','expedido','nombre','paterno','materno','fecha_nacimiento','sexo','celular','imei','correo','usuario','contrasenia','direccion','latitud','longitud','estado','login','credito','token','fecha_registro','direccion_imagen','categoria_licencia','tipo'
 ,'bloqueo','aceptar_condiciones','id_empresa','id_fotocopia_ci','id_fotocopia_licencia','id_fotocopia_tarjeta_de_identificacion_de_ham','id_fotocopia_tarjeta_de_identificacion_de_transito','id_fotocopia_factura_de_agua_luz','id_fotocopia_certificado_de_antecedentes_del_transito','id_fotocopia_certificado_de_antecedentes_del_felcc'];

//protected $dates = ['deleted_at'];
}
