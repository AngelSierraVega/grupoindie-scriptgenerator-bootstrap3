<?php

/*
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\ScriptGenerator\Bootstrap3\Component\Modal;

use GIndie\ScriptGenerator\HTML5;
use GIndie\ScriptGenerator\Bootstrap3;

/**
 * 
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @since 2017-01-18
 * @version 00.B0
 * @edit 19-04-17
 * - Deprecated use of GlobalAttributes
 */
class Header extends HTML5\Node
{

    /**
     * @edit 18-03-14
     */
    use Bootstrap3\ContextualBackgrounds;

    /**
     * 
     * @param type $title
     * @param type $btnDismiss
     * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
     * @since 2017-01-18
     * @return \GIndie\ScriptGenerator\HTML5\Category\Basic\Header
     * @edit 18-03-14
     */
    public function __construct($title, $btnDismiss = true)
    {
        parent::__construct(static::TYPE_DEFAULT, "div", ["class" => "modal-header"]);
        //parent::__construct("div", false, ["class" => "modal-header"]);
        //$this->setAttribute("class", "modal-header");
        if ($btnDismiss) {
            $btnDismiss = new
                    HTML5\Category\FormInput\Button(new
                    HTML5\Category\StylesSemantics\Span(
                    ["&times;"], ["aria-hidden" => "true"])
            );
            $btnDismiss->addClass("close");
            $btnDismiss->setAttribute("data-dismiss", "modal");
            $btnDismiss->setAttribute("aria-label", "Cerrar");
            $this->addContent($btnDismiss);
        }
        $this->title = $this->addContentGetPointer(HTML5\Category\Basic::Header(4, $title, "modal-title"));
    }

    /**
     *
     * @var string
     * @since 18-03-14 
     */
    protected $title;

    /**
     * 
     * @return string
     * @since 18-03-14
     */
    public function getTitle()
    {
        return $this->title;
    }

}
