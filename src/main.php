<?php

/**
 * GIG-DML-HTML5-Bootstrap3 - Document 2016-12-28
 * @copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * @package Bootstrap3
 *
 * @version GIG-BTSP3.00.01
 */

namespace GIndie\Generator\DML\HTML5\Bootstrap3;

spl_autoload_register(function($className) {
    if (substr($className, -4) == 'Test') {
        $className = substr($className, 0, \strrpos($className, "Test"));
    }
    $edited = substr($className,
            strlen(__NAMESPACE__) + strrpos($className, __NAMESPACE__));
    $edited = str_replace("\\", \DIRECTORY_SEPARATOR, __DIR__ . $edited) . ".php";
    if (is_readable($edited)) {
        require_once($edited);
    }
});