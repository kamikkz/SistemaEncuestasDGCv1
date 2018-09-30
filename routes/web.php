<?php

Route::redirect('/', 'ListaEncuestas');
Route::redirect('/home', 'ListaEncuestas');
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('homes');




//rutas accessibles solo si el usuario esta autenticado y ha ingresado al sistema
Route::group(['middleware' => 'auth'], function () {
    Route::resource('usuarios','UserController')->middleware('permission:kami.index');
    Route::resource('Dependence','DependenceController')->middleware('permission:kami.index');
    Route::resource('GeneralManagement','GeneralManagementController')->middleware('permission:kami.index');
    Route::resource('Asistencia','AsistenciaController')->middleware('permission:kami.index');
    Route::post('NVAAsistencia','AsistenciaController@registrarNVAasistencia')->name('Asistencia.registrarNVAasistencia')->middleware('permission:kami.index');
    Route::post('Asistencia','AsistenciaController@registrarAsistencia')->name('Asistencia.registrarAsistencia')->middleware('permission:kami.index');
    Route::post('USERAsistencia','AsistenciaController@registrarUSERAsistencia')->name('Asistencia.registrarUSERAsistencia')->middleware('permission:kami.index');
    Route::get('UserCursoAsistencia/{user}/{course}','CursoController@UserCursoAsistencia')->name('Asistencia.UserCursoAsistencia')->middleware('permission:kami.index');
    Route::resource('Curso','CursoController')->middleware('permission:kami.index');
    Route::resource('Encuesta','EncuestaController')->middleware('permission:kami.index');
    Route::resource('Usuarios','UserController')->middleware('permission:kami.index');
    Route::get('ListaEncuestas','EncuestaController@ListaEncuestas')->name('Encuesta.ListaEncuestas');
    Route::get('LlenarEncuesta/{curso}','EncuestaController@LlenarEncuesta')->name('Encuesta.LlenarEncuesta');
    Route::get('DatosEncuestas','EncuestaController@DatosEncuestas')->name('Encuesta.DatosEncuestas');
    Route::get('tiempoExtra/{curso}','CursoController@tiempoExtra')->name('Curso.tiempoExtra');
    Route::put('tiempoExtraUpdate/{curso}','CursoController@tiempoExtraUpdate')->name('Curso.tiempoExtraUpdate');
});
