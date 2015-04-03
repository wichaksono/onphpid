<?php
/** cegah akses langsung pada file */
if( !defined('index') ) { die('Halaman Di lindungi'); }

/**
 * load.php adalah file yang diload atau dipanggil ketika user mengakses website karena diletakkan di index.php
 * load.php berfungsi untuk membuat variable-variable untuk memudahkan pengkodean lebih lanjut
 * sekaligus melakukan pengecheckan file-file yang diperlukan untuk menjalankan sistem
 */

/** 
 * simpan alamat direktori kedalam variabel define(), agar lebih flexible saat di gunakan */

/* main directory */
define('BASEDIR',__DIR__); 

/* directory admin */
define('ADMIN',BASEDIR . '/admin');

/* directory includes */
define('INC',BASEDIR .'/includes');

/* directory themes */
define('THEMES',BASEDIR .'/themes'); 

/**
 * check keberadaan file config.php, sekaligus
 * check sudah di set atau belum variable didalam file config.php tersebut
 */

# mode pengecekan file dengan nilai FALSE, atau bisa dibaca "jika file config tidak ada maka ..."
if( !file_exists( BASEDIR . '/config.php' ) ) { die('Maaf, File Config.php tidak ada mohon dicek kembali'); }
	require BASEDIR . '/config.php';

	# pengecekan value pada varible dari file config.php
	if( empty($dbhost) ) die('$dbhost tidak boleh kosong');	
	if( empty($dbuser) ) die('$dbuser tidak boleh kosong');	
	if( empty($dbname) ) die('$dbname tidak boleh kosong');

	# menghapus slash paling kanan $url
	$url = rtrim($url,'/');

/**
 * ========================================================
 * memulai koneksi kedatabase 
 * ========================================================
 */
$koneksi = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

# check koneksi
if( $koneksi->connect_error )
{
	die( 'Oops Terjadi Kesalahan :' .$koneksi->connect_error );
}	
