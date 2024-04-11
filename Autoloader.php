<?php

// autoloader.php
class Autoloader
{
    /**
     * Registers the autoloader function with PHP.
     */
    public static function register()
    {
        spl_autoload_register([self::class, 'autoload']);
    }

    /**
     * Autoloads the given class.
     *
     * @param string $class The fully-qualified class name.
     * @return bool True if the file was successfully loaded, false otherwise.
     */
    private static function autoload($class)
    {
        // Convert namespace to directory structure and append '.php'
        $file = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';

        // Check if the file exists and include it if it does
        if (file_exists($file)) {
            require $file;

            return true;
        }

        // Return false if the class file does not exist
        return false;
    }
}

Autoloader::register();
