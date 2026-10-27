<?php

namespace NjDigitalLab\Laramin;

class Laramin
{
    /**
     * Get the stubs path.
     */
    public static function getStubsPath(string $path = null): string
    {
        $stubsPath = __DIR__.'/../stubs';

        if (empty($path)) {
            return $stubsPath;
        }

        return $stubsPath.'/'.rtrim($path, '/');
    }
}