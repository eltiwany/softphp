<?php

namespace App\Providers;

class FileServiceProvider {

    public static function includeAll($absolutePathToParentDirectory)
    {
        $files = self::scanRecursive($absolutePathToParentDirectory);

        foreach ($files as $file) {
            require_once $file;
        }
    }

    private static function scanRecursive($dir) {
        $result = [];
        $contents = scandir($dir);
    
        foreach ($contents as $item) {
            if ($item === '.' || $item === '..') {
                continue;
            }
    
            $path = $dir . DIRECTORY_SEPARATOR . $item;
    
            if (is_dir($path)) {
                $result = array_merge($result, self::scanRecursive($path));
            } else {
                $result[] = $path;
            }
        }
    
        return $result;
    }
}