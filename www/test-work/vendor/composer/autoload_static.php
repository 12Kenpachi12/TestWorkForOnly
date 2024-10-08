<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit36f6bddc0d4d26d26857641bd04630bc
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Kenpachi\\TestWork\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Kenpachi\\TestWork\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Kenpachi\\TestWork\\Component\\Route' => __DIR__ . '/../..' . '/src/Component/Route.php',
        'Kenpachi\\TestWork\\Component\\Router' => __DIR__ . '/../..' . '/src/Component/Router.php',
        'Kenpachi\\TestWork\\User' => __DIR__ . '/../..' . '/src/User.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit36f6bddc0d4d26d26857641bd04630bc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit36f6bddc0d4d26d26857641bd04630bc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit36f6bddc0d4d26d26857641bd04630bc::$classMap;

        }, null, ClassLoader::class);
    }
}
