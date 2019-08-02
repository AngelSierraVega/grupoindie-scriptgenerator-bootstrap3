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
 * @version 00.B1
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
     * 
     * @return string
     */
    public static function versions()
    {
        $rtnArray = [];
        //AlphaCero
        $rtnArray[\hexdec("00.A0")]["code"] = "AlphaCero";
        $rtnArray[\hexdec("00.A0")]["description"] = "Functional project";
        $rtnArray[\hexdec("00.A0")]["threshold"] = "00.A0";
        //BetaCero
        $rtnArray[\hexdec("00.B0")]["code"] = "BetaCero";
        $rtnArray[\hexdec("00.B0")]["description"] = "Main funcionality";
        $rtnArray[\hexdec("00.B0")]["threshold"] = "00.B0";
        //DOING
        $rtnArray[\hexdec("00.C0")]["code"] = "DOING";
        $rtnArray[\hexdec("00.C0")]["description"] = "Upgraded project structure (DataDefinition\Instance)";
        $rtnArray[\hexdec("00.C0")]["threshold"] = "00.C0";
        //One
        $rtnArray[\hexdec("01.00")]["code"] = "One";
        $rtnArray[\hexdec("01.00")]["description"] = "Final version";
        $rtnArray[\hexdec("01.00")]["threshold"] = "01.00";
        return $rtnArray;
    }

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
