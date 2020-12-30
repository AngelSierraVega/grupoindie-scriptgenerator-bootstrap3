<?php

/**
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\ScriptGenerator\Bootstrap3\Component\Panel;

use GIndie\ScriptGenerator\HTML5\Category\StylesSemantics\Div;

/**
 * The body of the panel component.
 * 
 * @package     Bootstrap3
 * @category    ComponentLibs
 * 
 * @copyright   (c) 2017 Angel Sierra Vega. Grupo INDIE.
 * @license file://LICENSE
 *
 * @version 00.B0
 * @since 17-05-20
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * 
 * @edit SG-BTSP3.00.01 18-02-02
 * - Added tests from BodyTest
 * - Deleted BodyTest
 */
class Body extends Div {
      
    /**
     * Creates a new body.
     * @since   GIG-BTSP3.00.01
     * 
     * @param mixed|NULL $content The optional content to add to the panel body.
     * 
     * @edit SG-BTSP3.00.01
     * 
     * @ut_str construct "<div class="panel-body"></div>"
     * 
     * @utp_params constructString "Hello!"
     * @ut_str constructString "<div class="panel-body">Hello!</div>"
     * 
     * @utp_params constructFalse false
     * @ut_str constructFalse "<div class="panel-body"></div>"
     * 
     */
    public function __construct($content = null) {
        parent::__construct($content, ["class" => "panel-body"]);
    }

}
