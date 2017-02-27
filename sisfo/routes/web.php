<?php
use App\Mahasiswa;
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

Route::get('/', 'viewcontroller@index');
Route::get('/tambah', function() {
	$mhsw = new Mahasiswa;
	$mhsw-> nama="saepul";
	$mhsw-> nim ="13111055";
	$mhsw-> alamat ="Bandug";
	$mhsw-> save ();
});

Route::get('/ubah', function () {
	$mhsw = Mahasiswa::find(1);
	$mhsw-> nama="asep saepul";
	$mhsw-> nim="13 111 055";
	$mhsw-> alamat="new york";
	$mhsw-> save ();
});

Route::get('/tampil', function () {
	$mhsw = Mahasiswa::all();
	foreach($mhsw as $mahasiswa)
	{
		echo "<b>nama</b> :";
		echo $mahasiswa->nama;
		echo "<br> <b>NIM</b> : ";
		echo $mahasiswa->nim;
		echo " <br> <b>Alamat</b> :";
		echo $mahasiswa->alamat;
		
	}
});
Route::get('/hapus', function()
{
	$mhsw = Mahasiswa::find(1);
	$mhsw -> delete();
});