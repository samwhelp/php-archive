#!/usr/bin/env php
<?php
	//require_once('vendor/autoload.php'); // if use composer

	require_once(__DIR__ . '/boot.php');

	use splitbrain\PHPArchive\Zip;

	$zip = new Zip();
	$zip->setIsFixPath(true);
	$zip->open(__DIR__ . '/Open_Data.zip');
	$zip->extract(__DIR__ . '/tmp');
