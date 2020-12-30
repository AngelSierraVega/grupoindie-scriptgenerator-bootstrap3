<?php

/**
 * GI-SG3-Bootstrap3-DVLP - Screensizes
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (CC) 2020 Angel Sierra Vega. Grupo INDIE.
 * @license file://LICENSE
 *
 * @package \GIndie\ScriptGenerator\Bootstrap3\Component
 *
 * @since 17-01-04
 * @version 00.B0
 */

namespace GIndie\ScriptGenerator\Bootstrap3\Component\Dropdown;

use GIndie\ScriptGenerator\HTML5\Category\StylesSemantics;

/**
 * 
 */
class Toggle extends StylesSemantics\Span
{

    /**
     * 
     * @param type $content
     * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
     * @since 2017-01-04
     */
    public function __construct($content)
    {
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
