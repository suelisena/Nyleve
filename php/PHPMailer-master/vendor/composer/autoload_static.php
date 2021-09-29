<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf289cdb055d8a918eea2e1b9ed0165c8
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf289cdb055d8a918eea2e1b9ed0165c8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf289cdb055d8a918eea2e1b9ed0165c8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf289cdb055d8a918eea2e1b9ed0165c8::$classMap;

        }, null, ClassLoader::class);
    }
}