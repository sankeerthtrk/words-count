<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc754a45ca97a81d56125bba3c6dd1b7d
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'alshaya\\WordCount\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'alshaya\\WordCount\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc754a45ca97a81d56125bba3c6dd1b7d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc754a45ca97a81d56125bba3c6dd1b7d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
