<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitafdbebba41a34889861d5f985e6f8ad3
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Moment\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Moment\\' => 
        array (
            0 => __DIR__ . '/..' . '/fightbulc/moment/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitafdbebba41a34889861d5f985e6f8ad3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitafdbebba41a34889861d5f985e6f8ad3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
