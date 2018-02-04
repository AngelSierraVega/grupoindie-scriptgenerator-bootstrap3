<?php

/**
 * SG-Bootstrap3 - HandlerProject
 */

namespace GIndie\ScriptGenerator\Bootstrap3\Plugins\UnitTest;

use \GIndie\ScriptGenerator\Bootstrap3;

/**
 * Description of HandlerProject
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * 
 * @copyright (c) 2018 Angel Sierra Vega. Grupo INDIE.
 *
 * @package ScriptGenerator
 * @subpackage Bootstrap3
 *
 * @version SG-BTSP3.00.00 18-01-18 Empty class created.
 * @edit SG-BTSP3.00.01
 * - Added code from HTML5 - HandlerProject.php
 */
class HandlerProject extends \GIndie\UnitTest\HandlerProject
{

    /**
     * @since SG-BTSP3.00.01
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
     * @since SG-BTSP3.00.01
     * @return string
     */
    public static function projectName()
    {
        return "\Bootstrap3";
    }

    /**
     * @since SG-BTSP3.00.01
     * @return string
     */
    public static function projectNamespace()
    {
        return "\ScriptGenerator";
    }

    /**
     * @since SG-BTSP3.00.01
     * @return string
     */
    public static function projectVendor()
    {
        return "\GIndie";
    }

}
