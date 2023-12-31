<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1ed095834e8b107e99d1bf7525ea3741
{
    public static $files = array (
        '3917c79c5052b270641b5a200963dbc2' => __DIR__ . '/..' . '/kint-php/kint/init.php',
    );

    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Kint\\' => 5,
        ),
        'J' => 
        array (
            'Juan\\EjemploComposer\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Kint\\' => 
        array (
            0 => __DIR__ . '/..' . '/kint-php/kint/src',
        ),
        'Juan\\EjemploComposer\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1ed095834e8b107e99d1bf7525ea3741::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1ed095834e8b107e99d1bf7525ea3741::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1ed095834e8b107e99d1bf7525ea3741::$classMap;

        }, null, ClassLoader::class);
    }
}
