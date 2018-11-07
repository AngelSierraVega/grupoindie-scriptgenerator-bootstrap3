<?php

/**
 * GI-SG3-Bootstrap3-DVLP - ProjectHandler
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (c) 2018 Angel Sierra Vega. Grupo INDIE.
 *
 * @package \GIndie\ScriptGenerator\Bootstrap3\Components
 *
 * @since 18-02-24
 * @version 0A.FF
 */

namespace GIndie\ScriptGenerator\Bootstrap3;

/**
 *
 * @edit 18-02-24
 * - Added code from HTML5form
 * @edit 18-03-09
 * - Deprecated autoloaderFilename()
 * @edit 18-11-07
 * - Class extends \GIndie\ProjectHandler\AbstractProjectHandler
 */
class ProjectHandler extends \GIndie\ProjectHandler\AbstractProjectHandler
{

    /**
     * @since 18-02-24
     * @return array
     */
    public static function projectClasses()
    {
        return [Document::class
            , Component\Button::class
            , Component\Dropdown::class
            , Component\Modal::class
            , Component\Panel::class
        ];
    }

    /**
     * @return string
     * @since 18-02-24
     */
    public static function pathToSourceCode()
    {
        return \pathinfo(__FILE__, \PATHINFO_DIRNAME) . \DIRECTORY_SEPARATOR;
    }

    /**
     * @return string
     * @since 18-02-24
     */
    public static function projectName()
    {
        return "Bootstrap3";
    }

    /**
     * @return string
     * @since 18-02-24
     */
    public static function projectNamespace()
    {
        return "ScriptGenerator";
    }

    /**
     * @return string
     * @since 18-02-24
     */
    public static function projectVendor()
    {
        return "GIndie";
    }

}
