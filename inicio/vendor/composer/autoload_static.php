<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf655188453db914792307690e494d1f7
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Automattic\\WooCommerce\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Automattic\\WooCommerce\\' => 
        array (
            0 => __DIR__ . '/..' . '/automattic/woocommerce/src/WooCommerce',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf655188453db914792307690e494d1f7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf655188453db914792307690e494d1f7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf655188453db914792307690e494d1f7::$classMap;

        }, null, ClassLoader::class);
    }
}
