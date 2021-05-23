<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd6bf22285f63c508d104bb9b29f3d230
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TicTa\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TicTa\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Classes/TicTa',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd6bf22285f63c508d104bb9b29f3d230::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd6bf22285f63c508d104bb9b29f3d230::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd6bf22285f63c508d104bb9b29f3d230::$classMap;

        }, null, ClassLoader::class);
    }
}
