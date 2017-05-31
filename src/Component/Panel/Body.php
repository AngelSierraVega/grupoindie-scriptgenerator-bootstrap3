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
 * The body of the panel component.
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
class Body extends Div {

    /**
     * Creates a new body.
     * @since   GIG-BTSP3.00.01
     * 
     * @param   mixed|NULL $content The optional content to add to the panel body.
     */
    public function __construct($content = \NULL) {
        parent::__construct($content, ["class" => "panel-body"]);
    }

}

/**
 * Class BodyTest
 * 
 * @internal 
 *
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 */
class BodyTest extends \GIndie\Test {

    /**
     * @test
     */
    public static function construct() {
        $expected = "<div class=\"panel-body\"></div>";
        $result = new Body();
        static::execStrCmp($expected, $result);
    }
    
    /**
     * @test
     */
    public static function constructString() {
        $expected = "<div class=\"panel-body\">Hello!</div>";
        $result = new Body("Hello!");
        static::execStrCmp($expected, $result);
    }
    
    /**
     * @test
     */
    public static function constructFalse() {
        $expected = "<div class=\"panel-body\"></div>";
        $result = new Body(\FALSE);
        static::execStrCmp($expected, $result);
    }

}
