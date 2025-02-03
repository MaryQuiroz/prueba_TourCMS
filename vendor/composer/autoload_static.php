<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc9cfe8737d7a4397c3ee46778debb265
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TourCMS\\Utils\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TourCMS\\Utils\\' => 
        array (
            0 => __DIR__ . '/..' . '/tourcms/tourcms-php/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc9cfe8737d7a4397c3ee46778debb265::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc9cfe8737d7a4397c3ee46778debb265::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc9cfe8737d7a4397c3ee46778debb265::$classMap;

        }, null, ClassLoader::class);
    }
}
