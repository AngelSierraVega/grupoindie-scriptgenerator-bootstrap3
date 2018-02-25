<?php

namespace GIndie\ScriptGenerator\Bootstrap3;

/**
 * DVLP-SG3-Bootstrap3 - ProjectHandler
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (c) 2018 Angel Sierra Vega. Grupo INDIE.
 *
 * @package ScriptGenerator
 * @subpackage Bootstrap3
 *
 * @version SG-BTSP3.00.00 18-02-24 Empty class created.
 * @edit SG-BTSP3.00.01
 * - Added code from HTML5form
 */
class ProjectHandler extends \GIndie\ProjectHandler
{

    /**
     * @return string
     * @since SG-BTSP3.00.01
     * @todo
     * - Deprecate method
     */
    public static function autoloaderFilename()
    {
        return "autoloader.php";
    }

    /**
     * @return string
     * @since SG-BTSP3.00.01
     */
    public static function pathToSourceCode()
    {
        return \pathinfo(__FILE__, \PATHINFO_DIRNAME) . \DIRECTORY_SEPARATOR;
    }

    /**
     * @return string
     * @since SG-BTSP3.00.01
     */
    public static function projectName()
    {
        return "Bootstrap3";
    }

    /**
     * @return string
     * @since SG-BTSP3.00.01
     */
    public static function projectNamespace()
    {
        return "ScriptGenerator";
    }

    /**
     * @return string
     * @since SG-BTSP3.00.01
     */
    public static function projectVendor()
    {
        return "GIndie";
    }

}
