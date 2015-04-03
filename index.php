<?php
session_start();

/**
 * @author 		Wakhid Wicaksono
 * @link 		blog : http://wakhidw.blogspot.com
 * @link 		website : http://onphpid.com
 * @copyright	2015 Wakhid W
 * index.php adalah file yang akan pertama kali diakses ketika alamat website dikunjungi 
 */

/** 
 * membuat variable untuk menghindari akses langsung ke file
 */
define('index', 'boleh akses');

require 'load.php';

require INC . '/nav.php';
?>
