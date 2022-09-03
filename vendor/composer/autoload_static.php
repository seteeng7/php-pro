<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit061480392a8787c3e7965dfc99b91eb6
{
    public static $files = array (
        '76b6f02d0dec6f40d26903b1adfac830' => __DIR__ . '/../..' . '/app/helpers/constants.php',
        '2c29eccabba6d2d23c463fd7346db4ca' => __DIR__ . '/../..' . '/app/router/router.php',
        'b1fe0e3961ac72772d020a29a7cf45b9' => __DIR__ . '/../..' . '/app/core/controller.php',
        'd73588f76e94db667a6fba44227f5afa' => __DIR__ . '/../..' . '/app/database/connect.php',
        '94802d42e7664d4021d40fdc805610e1' => __DIR__ . '/../..' . '/app/database/fetch.php',
        'ed5a8bfe326812dcc4dda832a35e7e00' => __DIR__ . '/../..' . '/app/helpers/redirect.php',
        'a6880a6c614054dd0ce28f507a1f88f6' => __DIR__ . '/../..' . '/app/helpers/flash.php',
        'f828e45e9a0ae1278568b7b9322ec6a6' => __DIR__ . '/../..' . '/app/helpers/sessions.php',
        'eb0698f4c25bc106fed336e22df757b5' => __DIR__ . '/../..' . '/app/helpers/validate.php',
    );

    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'app\\controllers\\Home' => __DIR__ . '/../..' . '/app/controllers/Home.php',
        'app\\controllers\\Login' => __DIR__ . '/../..' . '/app/controllers/Login.php',
        'app\\controllers\\User' => __DIR__ . '/../..' . '/app/controllers/User.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit061480392a8787c3e7965dfc99b91eb6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit061480392a8787c3e7965dfc99b91eb6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit061480392a8787c3e7965dfc99b91eb6::$classMap;

        }, null, ClassLoader::class);
    }
}
