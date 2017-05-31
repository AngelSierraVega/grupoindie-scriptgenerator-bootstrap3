<?php

/*
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\Generator\DML\HTML5\Bootstrap3\Component\Panel;

use GIndie\Generator\DML\HTML5\Category\StylesSemantics\Div;

/**
 * The footer of the panel component.
 * 
 * @package     Bootstrap3
 * @category    ComponentLibs
 * 
 * @copyright   (c) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * @version     GIG-BTSP3.00.01
 * @since       2017-05-20
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * 
 */
class Footer extends Div {

    /**
     * Creates a new footer.
     * @since   GIG-BTSP3.00.01
     * 
     * @param   mixed|NULL $content The optional content to add to the panel footer.
     */
    public function __construct($content = \NULL) {
        parent::__construct($content, ["class" => "panel-footer"]);
    }

}


/**
 * Class BodyTest
 * 
 * @internal 
 *
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 */
class FooterTest extends \GIndie\Test {

    /**
     * @test
     */
    public static function construct() {
        $expected = "<div class=\"panel-footer\"></div>";
        $result = new Footer();
        static::execStrCmp($expected, $result);
    }
    
    /**
     * @test
     */
    public static function constructString() {
        $expected = "<div class=\"panel-footer\">Hello!</div>";
        $result = new Footer("Hello!");
        static::execStrCmp($expected, $result);
    }
    
    /**
     * @test
     */
    public static function constructFalse() {
        $expected = "<div class=\"panel-footer\"></div>";
        $result = new Footer(\FALSE);
        static::execStrCmp($expected, $result);
    }

}