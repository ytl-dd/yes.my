<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcacdc1ebb10a39c6a9bfb686e2966bc9
{
    public static $classMap = array (
        'OTGS_Assets_Handles' => __DIR__ . '/..' . '/otgs/ui/src/php/OTGS_Assets_Handles.php',
        'OTGS_Assets_Store' => __DIR__ . '/..' . '/otgs/ui/src/php/OTGS_Assets_Store.php',
        'OTGS_UI_Assets' => __DIR__ . '/..' . '/otgs/ui/src/php/OTGS_UI_Assets.php',
        'OTGS_UI_Loader' => __DIR__ . '/..' . '/otgs/ui/src/php/OTGS_UI_Loader.php',
        'WPML\\WPSEO\\Loaders' => __DIR__ . '/../..' . '/classes/Loaders.php',
        'WPML\\WPSEO\\Meta\\SocialHooks' => __DIR__ . '/../..' . '/classes/Meta/SocialHooks.php',
        'WPML\\WPSEO\\Presentation\\Hooks' => __DIR__ . '/../..' . '/classes/Presentation/Hooks.php',
        'WPML\\WPSEO\\PrimaryCategory\\Hooks' => __DIR__ . '/../..' . '/classes/PrimaryCategory/Hooks.php',
        'WPML\\WPSEO\\SlugTranslation\\Hooks' => __DIR__ . '/../..' . '/classes/SlugTranslation/Hooks.php',
        'WPML\\WPSEO\\Utils' => __DIR__ . '/../..' . '/classes/Utils.php',
        'WPML_Core_Version_Check' => __DIR__ . '/..' . '/wpml-shared/wpml-lib-dependencies/src/dependencies/class-wpml-core-version-check.php',
        'WPML_Dependencies' => __DIR__ . '/..' . '/wpml-shared/wpml-lib-dependencies/src/dependencies/class-wpml-dependencies.php',
        'WPML_PHP_Version_Check' => __DIR__ . '/..' . '/wpml-shared/wpml-lib-dependencies/src/dependencies/class-wpml-php-version-check.php',
        'WPML_WPSEO_Categories' => __DIR__ . '/../..' . '/classes/class-wpml-wpseo-categories.php',
        'WPML_WPSEO_Filters' => __DIR__ . '/../..' . '/classes/class-wpml-wpseo-filters.php',
        'WPML_WPSEO_Main_Factory' => __DIR__ . '/../..' . '/classes/class-wpml-wpseo-main-factory.php',
        'WPML_WPSEO_Metabox_Hooks' => __DIR__ . '/../..' . '/classes/class-wpml-wpseo-metabox-hooks.php',
        'WPML_WPSEO_Redirection' => __DIR__ . '/../..' . '/classes/class-wpml-wpseo-redirection.php',
        'WPML_WPSEO_Should_Create_Redirect' => __DIR__ . '/../..' . '/classes/class-wpml-wpseo-should-create-redirect.php',
        'WPML_WPSEO_XML_Sitemaps_Filter' => __DIR__ . '/../..' . '/classes/class-wpml-wpseo-xml-sitemaps-filter.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitcacdc1ebb10a39c6a9bfb686e2966bc9::$classMap;

        }, null, ClassLoader::class);
    }
}
