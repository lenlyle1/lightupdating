<?php

namespace Lib\Files;

Class Curl
{
	public static function getFile($file, $saveName)
	{
		// get the file via curl
		$ch = curl_init ($file);
	    curl_setopt($ch, CURLOPT_HEADER, 0);
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	    curl_setopt($ch, CURLOPT_BINARYTRANSFER,1);
	    $raw=curl_exec($ch);
	    curl_close ($ch);
	    if(file_exists($saveName)){
	        unlink($saveName);
	    }
	    $fp = fopen($saveName,'x');
	    fwrite($fp, $raw);
	    fclose($fp);
	}
}