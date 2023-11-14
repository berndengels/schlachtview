<?php

namespace inc;

class Media
{
	private static $mediaPath = __DIR__ . '/../media';

	/**
	 * @return string
	 */
	public static function getMediaPath()
	{
		return realpath(self::$mediaPath);
	}

	public static function getMedia()
	{
		$files = [];
		$path = self::getMediaPath();
		$media = scandir($path);
		sort($media);
		foreach ($media as $file) {
			if(in_array($file, ['.','..'])) {
				continue;
			}
			[,$name] = explode('-', basename($file, '.m4a'));
			$files[] = [
				'path'	=> '/media/'.$file,
				'name'	=> $name,
			];
		}

		return $files;
	}
}