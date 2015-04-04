<?php 
/** cegah akses langsung pada file */
if( !defined('index') ) { die('Halaman Di lindungi'); }

# rule halaman
$page    = get_param();
$admin   = $pages['admin'];

# jika halaman yang dimaksud ada
if( in_array($page, array_keys($admin)) )
{
	$filename = ADMIN . '/' . $admin[$page];
	if( !file_exists($filename) ) { die("Oops!! File {$page}.php ");  }
		require $filename;
}else{
	
	# jika halaman yang dimaksud tidak ada
	$file404 = THEMES . '/404.php';
	if( !file_exists($file404) )
	{
		$html = '<title>Oops!!!, Page Not Found</title>';
		$html .= '<body><h2>404</h2><p>Page Not Found</p></body>';
		die($html);
	}else{
		require $file404;
	}
} 