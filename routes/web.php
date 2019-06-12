<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

#Redirigo a una pagina de prueba
Route::get('/hola', function () {
    return view('Hola');
});

#Redirigo a la pagina principal de la plantilla
Route::get('/Principal', function () {
    return view('main/Contenido');
});

#Redirigo al formulario de Categoria
Route::get('/Categorias', function () {
    return view('main/Alamcen/Almacen-Categorias');
});

#Redirigo al formulario de Articulos
Route::get('/Articulos', function () {
    return view('main/Almacen/Almacen-Articulos');
});

#Redirigo al formulario de Ingresos
Route::get('/Ingresos', function () {
    return view('main/Compras/Compras-Ingresos');
});

#Redirigo al formulario de Proveedores
Route::get('/Proveedores', function () {
    return view('main/Compras/Compras-Proveedores');
});

#Redirigo al formulario de Ventas
Route::get('/Ventas', function () {
    return view('main/Ventas/Ventas-Ventas');
});

#Redirigo al formulario de Clientes
Route::get('/Clientes', function () {
    return view('main/Ventas/Ventas-Clientes');
});

#Redirigo al formulario de Usuarios
Route::get('/Usuarios', function () {
    return view('main/Acceso/Acceso-Usuarios');
});

#Redirigo al formulario de Roles
Route::get('/Roles', function () {
    return view('main/Acceso/Acceso-Roles');
});

#Redirigo al formulario de Personas
Route::get('/Personas', function () {
    return view('main/Acceso/Acceso-Personas');
});

#Redirigo al formulario de Proveddores
Route::get('/Proveedores', function () {
    return view('main/Acceso/Acceso-Proveedores');
});

#Redirigo al formulario de agregar Personas
Route::get('/Agregar-Personas', function () {
    return view('main/Agregar/Agregar-Personas');
});

#Redirigo al formulario de modificar Personas
Route::get('/Modificar-Personas', function () {
    return view('main/Modificar/Modificar-Personas');
});

#Redirigo al formulario de Eliminar Personas
Route::get('/Eliminar-Personas', function () {
    return view('main/Eliminar/Eliminar-Personas');
});

#Redirigo al formulario de agregar Proveedor
Route::get('/Agregar-Proveedor', function () {
    return view('main/Agregar/Agregar-Proveedor');
});

#Redirigo al formulario de modificar Proveedor
Route::get('/Modificar-Proveedor', function () {
    return view('main/Modificar/Modificar-Proveedor');
});

#Redirigo al formulario de Eliminar Proveedor
Route::get('/Eliminar-Proveedor', function () {
    return view('main/Eliminar/Eliminar-Proveedor');
});

#Redirigo al formulario de agregar Roles
Route::get('/Agregar-Roles', function () {
    return view('main/Agregar/Agregar-Roles');
});

#Redirigo al formulario de modificar Roles
Route::get('/Modificar-Roles', function () {
    return view('main/Modificar/Modificar-Roles');
});

#Redirigo al formulario de Eliminar Roles
Route::get('/Eliminar-Roles', function () {
    return view('main/Eliminar/Eliminar-Roles');
});

#Redirigo al formulario de agregar Usuarios
Route::get('/Agregar-Usuarios', function () {
    return view('main/Agregar/Agregar-Usuarios');
});

#Redirigo al formulario de modificar Usuarios
Route::get('/Modificar-Usuarios', function () {
    return view('main/Modificar/Modificar-Usuarios');
});

#Redirigo al formulario de Eliminar Usuarios
Route::get('/Eliminar-Usuarios', function () {
    return view('main/Eliminar/Eliminar-Usuarios');
});
