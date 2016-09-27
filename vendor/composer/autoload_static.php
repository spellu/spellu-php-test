<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit16e4e73049a782ac9aa7a6145fefac68
{
    public static $files = array (
        '777b06278e4d7f04fbe81d52fe352e46' => __DIR__ . '/../..' . '/helpers1.php',
        '7d2d8b47f5cdac85c614715afa5be50c' => __DIR__ . '/../..' . '/helpers2.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Spellu\\Test\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Spellu\\Test\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source-psr-4',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Spellu\\Test\\' => 
            array (
                0 => __DIR__ . '/../..' . '/source-psr-0',
            ),
        ),
    );

    public static $classMap = array (
        'ClassA' => __DIR__ . '/../..' . '/source-classmap/ClassA.php',
        'ClassGlobal' => __DIR__ . '/../..' . '/source-classmap/Class.php',
        'InterfaceNamespaced' => __DIR__ . '/../..' . '/source-classmap/Sub/InterfaceNamespaced.php',
        'Spellu\\Test\\ClassB' => __DIR__ . '/../..' . '/source-classmap/ClassB.php',
        'Spellu\\Test\\ClassNamespaced' => __DIR__ . '/../..' . '/source-classmap/Class.php',
        'Spellu\\Test\\InterfaceGlobal' => __DIR__ . '/../..' . '/source-classmap/Sub/InterfaceGlobal.php',
        'Spellu\\Test\\TraitNamespaced' => __DIR__ . '/../..' . '/source-classmap/Sub/Trait.php',
        'TraitGlobal' => __DIR__ . '/../..' . '/source-classmap/Sub/Trait.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit16e4e73049a782ac9aa7a6145fefac68::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit16e4e73049a782ac9aa7a6145fefac68::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit16e4e73049a782ac9aa7a6145fefac68::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit16e4e73049a782ac9aa7a6145fefac68::$classMap;

        }, null, ClassLoader::class);
    }
}
