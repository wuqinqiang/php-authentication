<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4f034d4c4a1a273b3f675f4c3094ebcd
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Remember\\Auth\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Remember\\Auth\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4f034d4c4a1a273b3f675f4c3094ebcd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4f034d4c4a1a273b3f675f4c3094ebcd::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}