<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite319ebe73565ef27c548c94cc1f7fff3
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Andre\\DesingPatterns\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Andre\\DesingPatterns\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite319ebe73565ef27c548c94cc1f7fff3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite319ebe73565ef27c548c94cc1f7fff3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite319ebe73565ef27c548c94cc1f7fff3::$classMap;

        }, null, ClassLoader::class);
    }
}