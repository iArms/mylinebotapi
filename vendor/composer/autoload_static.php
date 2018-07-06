<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit586ba4bf1aaa7812849b98879d994162
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LINE\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LINE\\' => 
        array (
            0 => __DIR__ . '/..' . '/linecorp/line-bot-sdk/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit586ba4bf1aaa7812849b98879d994162::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit586ba4bf1aaa7812849b98879d994162::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}