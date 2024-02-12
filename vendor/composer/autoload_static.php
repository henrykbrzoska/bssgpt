<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb62b92811daf2324c4b7ffdb47c5fad4
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Bssgpt\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Bssgpt\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Bssgpt\\EventListener\\Bssgpt' => __DIR__ . '/../..' . '/bssgpt.php',
        'Bssgpt\\EventListener\\FormListener' => __DIR__ . '/../..' . '/src/EventListener/FormListener.php',
        'Bssgpt\\Form\\Admin\\Extension\\ListenerExtension' => __DIR__ . '/../..' . '/src/Form/Admin/Extension/ListenerExtension.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb62b92811daf2324c4b7ffdb47c5fad4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb62b92811daf2324c4b7ffdb47c5fad4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb62b92811daf2324c4b7ffdb47c5fad4::$classMap;

        }, null, ClassLoader::class);
    }
}
