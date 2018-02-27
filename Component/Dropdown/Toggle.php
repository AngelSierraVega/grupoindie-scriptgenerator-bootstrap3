<?php

/*
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\ScriptGenerator\Bootstrap3\Component\Dropdown;

use GIndie\ScriptGenerator\HTML5\Category\StylesSemantics;

/**
 * 
 * @version beta.00.01
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @since 2017-01-04
 */
class Toggle extends StylesSemantics\Span {

    /**
     * 
     * @param type $content
     * @version beta.00.01
     * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
     * @since 2017-01-04
     */
    public function __construct($content) {
        $attributes = ["class" => "dropdown-toggle"];
        $attributes["data-toggle"] = "dropdown";
        $attributes["role"] = "button";
        $attributes["aria-haspopup"] = "true";
        $attributes["aria-expanded"] = "false";
        parent::__construct($content, $attributes);
        $this->addContent(" ");
        $this->addContent(new StylesSemantics\Span([], ["class" => "caret"]));
    }

}
