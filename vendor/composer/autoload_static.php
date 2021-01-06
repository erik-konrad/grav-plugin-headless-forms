<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf837c794b7dbe84378f318fcd6f4a86a
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Grav\\Plugin\\HeadlessForms\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Grav\\Plugin\\HeadlessForms\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'Grav\\Plugin\\HeadlessFormsPlugin' => __DIR__ . '/../..' . '/headless-forms.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf837c794b7dbe84378f318fcd6f4a86a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf837c794b7dbe84378f318fcd6f4a86a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf837c794b7dbe84378f318fcd6f4a86a::$classMap;

        }, null, ClassLoader::class);
    }
}