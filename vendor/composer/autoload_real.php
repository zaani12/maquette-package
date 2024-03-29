<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitd4df425961d3919cf9e3adf59b488964
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitd4df425961d3919cf9e3adf59b488964', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitd4df425961d3919cf9e3adf59b488964', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitd4df425961d3919cf9e3adf59b488964::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
