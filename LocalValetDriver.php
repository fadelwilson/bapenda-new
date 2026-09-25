<?php

use Valet\Drivers\ValetDriver;

class LocalValetDriver extends ValetDriver
{
    public function serves(string $sitePath, string $siteName, string $uri): bool
    {
        return true;
    }

    public function isStaticFile(string $sitePath, string $siteName, string $uri)
    {
        if (file_exists($staticPath = $sitePath . '/public' . $uri) && !is_dir($staticPath)) {
            return $staticPath;
        }

        if (file_exists($staticPath = $sitePath . $uri) && !is_dir($staticPath)) {
            return $staticPath;
        }

        return false;
    }

    public function frontControllerPath(string $sitePath, string $siteName, string $uri): string
    {
        if (str_starts_with($uri, '/loginwebsite')) {
            $_SERVER['SCRIPT_NAME'] = '/loginwebsite/index.php';
            $_SERVER['SCRIPT_FILENAME'] = $sitePath . '/public/loginwebsite/index.php';
            return $sitePath . '/public/loginwebsite/index.php';
        }

        return $sitePath . '/public/index.php';
    }
}
