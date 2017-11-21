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
Route::get('/about', function () {
    return 'Rafy Ganteng';
});
Route::get('/kantin/{makanan}/{minuman}/{cemilan}',function($a,$b,$c){
 return 'Makan '.$a.'<br>'.
 		'Minum '.$b.'<br>'.
 		'Ngemil '.$c.'<br>';
});

Route::get('/testmodelsiswa', function(){
	//mengeluarkan semua data yang ada di tabel siswa melalui model Siswa
	$s=App\Siswa::all();
	return $s;
});

Route::get('/testmodelsiswa2', function(){
	//mengeluarkan semua data yang ada di tabel siswa melalui model Siswa
	$s=App\Siswa::find(2);
	return $s;
});

Route::get('/testmodelsiswa3', function(){
	//mengeluarkan semua data yang ada di tabel siswa melalui model Siswa
	$s=App\Siswa::where('umur','20')->get();
	return $s;
});