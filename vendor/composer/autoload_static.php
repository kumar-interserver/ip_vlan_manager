<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit73728c998321eb8b5d811ab9e8d00e3f
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Detain\\IpVlanManager\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Detain\\IpVlanManager\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Detain\\IpVlanManager\\Plugin' => __DIR__ . '/../..' . '/src/Plugin.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit73728c998321eb8b5d811ab9e8d00e3f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit73728c998321eb8b5d811ab9e8d00e3f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit73728c998321eb8b5d811ab9e8d00e3f::$classMap;

        }, null, ClassLoader::class);
    }
}