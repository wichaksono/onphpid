<?php 
/** cegah akses langsung pada file */
if( !defined('index') ) { die('Halaman Di lindungi'); }
/**
 * Handling singkat untuk menambah halaman baik disisi admin maupun visitor
 * yang akan dieksekusi oleh file nav.php(visitor) dan admin-nav.php(admin);
 * @example :
 * $pages['themes'] = array( <param_get> => <namafile> , <param_get> => <namafile> );
 */

/** Halaman Visitor*/
$pages['themes'] = array(
	'index'  =>'index.php',
	'sample' =>'sample.php'
	);

/** Halaman Admin*/
$pages['admin']  = array(
	'dashboard' => 'dashboard.php',
	);


return $pages;
?>