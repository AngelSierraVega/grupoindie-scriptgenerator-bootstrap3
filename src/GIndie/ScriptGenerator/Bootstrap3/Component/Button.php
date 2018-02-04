<?php

/*
 * Copyright (C) 2016 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\ScriptGenerator\Bootstrap3\Component;

use GIndie\ScriptGenerator\Bootstrap3\ContextualColors;
use GIndie\ScriptGenerator\HTML5\Category\FormInput;

class Button extends FormInput\Button {

    use ContextualColors;

    //protected $base
    
    /**
     * 
     * @param type $content
     * @param type $type
     * 
     * @ut_str construct "<button type="button" class="btn btn-default"></button>"
     */
    public function __construct($content = null, $type = "button") {
        parent::__construct($content, $type);
        $this->baseClass = "btn";
        $this->addClass($this->baseClass);
        $this->setContext(static::$COLOR_DEFAULT, false);
    }

}
