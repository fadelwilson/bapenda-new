<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Helper untuk mengonversi gambar ke format WebP secara otomatis.
 * Mendukung input: JPG, JPEG, PNG, dan GIF.
 */
if (!function_exists('convert_to_webp')) {
	function convert_to_webp($source_path, $quality = 85)
	{
		if (!file_exists($source_path) || !is_file($source_path)) {
			return basename($source_path);
		}

		$dir = dirname($source_path);
		$filename_without_ext = pathinfo($source_path, PATHINFO_FILENAME);
		$webp_filename = $filename_without_ext . '.webp';
		$webp_path = $dir . '/' . $webp_filename;

		$ext = strtolower(pathinfo($source_path, PATHINFO_EXTENSION));
		if ($ext === 'webp') {
			return basename($source_path);
		}

		$image = null;
		switch ($ext) {
			case 'jpeg':
			case 'jpg':
				if (function_exists('imagecreatefromjpeg')) {
					$image = @imagecreatefromjpeg($source_path);
				}
				break;
			case 'png':
				if (function_exists('imagecreatefrompng')) {
					$image = @imagecreatefrompng($source_path);
					if ($image) {
						imagepalettetotruecolor($image);
						imagealphablending($image, true);
						imagesavealpha($image, true);
					}
				}
				break;
			case 'gif':
				if (function_exists('imagecreatefromgif')) {
					$image = @imagecreatefromgif($source_path);
				}
				break;
		}

		if ($image && function_exists('imagewebp')) {
			$success = @imagewebp($image, $webp_path, $quality);
			imagedestroy($image);
			if ($success && file_exists($webp_path)) {
				if ($source_path !== $webp_path) {
					@unlink($source_path);
				}
				return $webp_filename;
			}
		}

		return basename($source_path);
	}
}
