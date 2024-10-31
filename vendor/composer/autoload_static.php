<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit08edb4e782b2297c27b0f52a8f2fe036
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'Opalestate_Custom_Fields\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Opalestate_Custom_Fields\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit08edb4e782b2297c27b0f52a8f2fe036::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit08edb4e782b2297c27b0f52a8f2fe036::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
