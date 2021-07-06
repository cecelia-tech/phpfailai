<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6fde91a852828a3cf584920b2162baf5
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Kaunas\\' => 7,
        ),
        'B' => 
        array (
            'Belgija\\' => 8,
        ),
        'A' => 
        array (
            'Australija\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Kaunas\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
        'Belgija\\' => 
        array (
            0 => __DIR__ . '/../..' . '/belgai',
        ),
        'Australija\\' => 
        array (
            0 => __DIR__ . '/../..' . '/australai',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6fde91a852828a3cf584920b2162baf5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6fde91a852828a3cf584920b2162baf5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6fde91a852828a3cf584920b2162baf5::$classMap;

        }, null, ClassLoader::class);
    }
}
