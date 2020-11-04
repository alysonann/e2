<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit61c033ed3c318e84b18eab93ef01828a
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'RPS\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'RPS\\' => 
        array (
            0 => __DIR__ . '/..' . '/susanbuck/rock-paper-scissors/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit61c033ed3c318e84b18eab93ef01828a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit61c033ed3c318e84b18eab93ef01828a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit61c033ed3c318e84b18eab93ef01828a::$classMap;

        }, null, ClassLoader::class);
    }
}