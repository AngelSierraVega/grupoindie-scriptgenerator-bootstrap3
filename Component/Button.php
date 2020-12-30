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
 * @since 16
 * @version 00.B0
 */

namespace GIndie\ScriptGenerator\Bootstrap3\Component;

use GIndie\ScriptGenerator\Bootstrap3\ContextualColors;
use GIndie\ScriptGenerator\HTML5\Category\FormInput;

/**
 * 
 */
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
