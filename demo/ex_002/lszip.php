#!/usr/bin/env php
<?php
	//require_once('vendor/autoload.php'); // if use composer

	require_once(__DIR__ . '/boot.php');

	use splitbrain\PHPArchive\Zip;

	$zip = new Zip();
	$zip->setIsFixPath(true);
	$zip->open(__DIR__ . '/ex.zip');
	$info = $zip->contents();

	//var_dump($info);

	foreach ($info as $key => $item) {
		//var_dump($item);
		echo $item->getPath() . PHP_EOL;
	}
