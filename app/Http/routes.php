<?php
//LOGIN
Route::resource('/','LoginController');
Route::resource('login','LoginController@store');
Route::resource('logout','LoginController@logout');


Route::get("registrarse","ProveedorController@registrarse");

Route::resource('escritorio','EscritorioController');


Route::resource('convocatoriasaprobadas','ConvocatoriasAprobadasController');

Route::resource('convocatoriasactivas','ConvocatoriasActivasController');
Route::post('adjudicar','ConvocatoriasActivasController@adjudicar_convocatoria');
Route::post('adjudicarParcial','ConvocatoriasActivasController@adjudicar_convocatoria_parcial');
Route::resource('parciales','ConvocatoriasActivasController@parciales');
Route::post('cerrar','ConvocatoriasActivasController@cerrar_convocatoria');

Route::resource('convocatoriasinactivas','ConvocatoriasInactivasController');

Route::get("convocatorias/{id}","ConvocatoriasController@covocatorias");

Route::resource('convocatorias','ConvocatoriasController');

Route::resource("perfil","PerfilController");

Route::resource('ayuda','AyudaController');

Route::resource('mail','MailController');

Route::resource('consulta','ConsultaController');

Route::post('contrasena','ContrasenaControler@index');

Route::resource('ayudaemail','AyudaEmailController@index');

Route::resource('proveedores','ProveedoresController');



 

//--registrar proveedor ruta para REGISTRO DE PROVEEDORES 15-02-18 !!Daniel Alanis
Route::resource('registrosproveedor','RegistrosProveedorController');
 
//
Route::get('createadmin','RegistrosProveedorController@administrador');
Route::post('registrosproveedor/updateadmintrador','RegistrosProveedorController@updateadministrador');
Route::get('administrador','RegistrosProveedorController@admin');
///
Route::get('password','RegistrosProveedorController@password');
Route::post('registrosproveedor/updatepassword','RegistrosProveedorController@updatePassword');

Route::post('adjuntarcategoria','RegistrosProveedorController@adjuntar_categoria');

Route::resource('consultar','ConsultarController'); 

//
Route::get('accesos','ProveedoresController@accesos');

  

//* adjuntar archivos willians d.

//Route::post('enviar_correo', 'CorreoController@enviar');
//Route::post('cargar_archivo_correo', 'CorreoController@store');

// Adjuntar Propuesta
Route::get('/uploadfile', 'CorreoController@index');
Route::post('/uploadfile', 'CorreoController@showfileupload');
Route::resource('/uploadfile','CorreoController');

///Mailing  //Route::resource('convocatoriasaprobadas','ConvocatoriasAprobadasController');

Route::resource('mailing','EnvioController');
Route::post('mailing' , 'EnvioController@store');







