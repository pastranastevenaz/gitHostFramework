<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd9e89e2e87776a9070f94a977fe3b053
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Klein\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Klein\\' => 
        array (
            0 => __DIR__ . '/..' . '/klein/klein/src/Klein',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd9e89e2e87776a9070f94a977fe3b053::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd9e89e2e87776a9070f94a977fe3b053::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
