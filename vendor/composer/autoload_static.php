<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4b78eb4d4816feb5a033cd563def86ce
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
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4b78eb4d4816feb5a033cd563def86ce::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4b78eb4d4816feb5a033cd563def86ce::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4b78eb4d4816feb5a033cd563def86ce::$classMap;

        }, null, ClassLoader::class);
    }
}