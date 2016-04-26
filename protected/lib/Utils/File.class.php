<?php

Class Utils_File {


	public function getFilenameFromPath($path)
	{
		$bits = explode('/', $path);

		$result = array('filename' => array_pop($bits),
						'path' => implode('/', $bits));

		return $result;
	}

	public function getFilenameParts($filename)
	{
		$bits = explode('.', $filename);

		$result = array('extension' => array_pop($bits),
						'filename' => implode('.', $bits));

		return $result;
	}
}