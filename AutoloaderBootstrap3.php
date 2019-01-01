<?php

/**
 * SG-Bootstrap3 - autoloader
 *
 * @copyright (c) 2018 Angel Sierra Vega. Grupo INDIE.
 *
 * @package \GIndie\ScriptGenerator\Bootstrap3
 * 
 * @since 18-01-18
 * @version 00.B0
 *
 * @edit 18-03-09
 * - Renamed file from autoloader.php to AutoloaderBootstrap3.php
 */

namespace GIndie\ScriptGenerator\Bootstrap3;

/**
 * Autoloader function
 * @edit 18-01-18
 */
\spl_autoload_register(function($className) {
    switch (\substr($className, 0, (\strlen(__NAMESPACE__) * 1)))
    {
        case __NAMESPACE__:
            $edited = \substr($className, \strlen(__NAMESPACE__) + \strrpos($className, __NAMESPACE__));
            $edited = \str_replace("\\", \DIRECTORY_SEPARATOR, __DIR__ . $edited) . ".php";
            if (\is_readable($edited)) {
                require_once($edited);
            }
    }
});
