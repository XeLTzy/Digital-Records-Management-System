<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit535a4d24e4f091abd936ae4ce2f52799
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit535a4d24e4f091abd936ae4ce2f52799::$classMap;

        }, null, ClassLoader::class);
    }
}
