<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit29f88164803b63787ab8b498e08ad373
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dotenv\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit29f88164803b63787ab8b498e08ad373::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit29f88164803b63787ab8b498e08ad373::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit29f88164803b63787ab8b498e08ad373::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
