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
 * @edit SG-BTSP3.00.02 18-03-09
 * - Deprecated autoloaderFilename()
 */
class ProjectHandler extends \GIndie\ProjectHandler
{

    /**
     * @return string
     * @since SG-BTSP3.00.01
     * @deprecated since SG-BTSP3.00.02
     */
    public static function autoloaderFilenameDPR()
    {
        return "autoloader.php";
    }

    /**
     * @since SG-BTSP3.00.0?
     * @return array
     */
    public static function projectClasses()
    {
        return [Bootstrap3\Document::class
            , Bootstrap3\Component\Button::class
            , Bootstrap3\Component\Dropdown::class
            , Bootstrap3\Component\Modal::class
            , Bootstrap3\Component\Panel::class
        ];
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
