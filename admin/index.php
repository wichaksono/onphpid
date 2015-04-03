<?php
session_start();

if( !defined('index') ) { define('index', 'boleh akses'); }

/** 
 * menyisipkan file load.php, agar bisa menggunakan variable yang sudah dibuat 
 */
require ( './../load.php');
require ( INC .'/admin-nav.php');