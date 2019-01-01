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
 */
class Footer extends HTML5\Node
{

    private $_btnGroup;

    /**
     * 
     * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
     * @since 2017-01-18
     * @param boolean $btnDismiss
     */
    public function __construct($btnDismiss = false)
    {
        parent::__construct(static::TYPE_DEFAULT, "div", ["class" => "modal-footer"]);
        //parent::__construct("div", false, ["class" => "modal-footer"]);
//        $this->_btnGroup = $this->addContentGetPointer(HTML5\Node::Simple("div",
//                        ["class" => "btn-group", "role" => "group",
//                    "aria-label" => "..."])
//        );
        $this->_btnGroup = $this->addContentGetPointer(HTML5\Category\StylesSemantics::Div("", ["class" => "btn-group", "role" => "group",
                    "aria-label" => "..."])
        );
        if ($btnDismiss) {
            //$btnDismiss = \GIgenerator\DML\HTML5\Bootstrap3\Factory::Button($content, 0);
            //$btnDismiss = new \GIgenerator\DML\HTML5\Bootstrap3\Button($content, $type);
            $btnDismiss = new Bootstrap3\Component\Button("Cerrar", Bootstrap3\Component\Button::TYPE_BUTTON);
            $btnDismiss->setAttribute("data-dismiss", "modal");
            //$btnDismiss->addClass();
//                \GIgenerator\DML\HTML5\FormInput\Button("Cerrar", [
//                    "class" => "btn btn-default",
//                    "data-dismiss" => "modal"
//                ]);
            //$this->addButton($btnDismiss);
        }
    }

    public function addButton($button)
    {
        return $this->_btnGroup->addContent($button);
    }

}
