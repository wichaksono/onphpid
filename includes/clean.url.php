<?php 
/** cegah akses langsung pada file */
if( !defined('index') ) { die('Halaman Di lindungi'); }

$pages = require ( BASEDIR . '/pages.php' );

/**
 * url parameter default untuk navigasi */
$pagesdefault['themes'] = array('index'=>'index.php');

$pagesdefault['admin']  = array('index'=>'dashboard.php');

/** merge navigasi*/
$pages['themes'] = array_merge($pagesdefault['themes'],$pages['themes']);

$pages['admin']  = array_merge($pagesdefault['admin'],$pages['admin']);

/** check url apakah ada parameter tambahan atau tidak */
$url  = ( isset($_GET['url']) && $_GET['url'] != '' ) ? $_GET['url'] : 'index';

# Mengubah url menjadi Array
$urls = explode('/', rtrim($url,'/'));

$GLOBAL['urls'] = $urls;

# get_param($parameter)
# return FALSE jika <parameter> bukan sebuah angka
function get_param($n = 0){
	global $urls;
	if ( !is_int($n) ) {
		return false;
	}
	return $urls[$n];
}

