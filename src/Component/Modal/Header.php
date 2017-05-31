<?php

/*
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\Generator\DML\HTML5\Bootstrap3\Component\Modal;

use GIndie\Generator\DML\HTML5;
use GIndie\Generator\DML\HTML5\Bootstrap3;

/**
 * 
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @since 2017-01-18
 * @version beta.00.01
 */
class Header extends HTML5\Node {

    use Bootstrap3\ContextualBackgrounds;

    /**
     * 
     * @param type $title
     * @param type $btnDismiss
     * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
     * @since 2017-01-18
     * @version beta.00.01
     */
    public function __construct($title, $btnDismiss = true) {
        parent::__construct("div", false, ["class" => "modal-header"]);
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
        $this->addContent(HTML5\Category\Basic::Header(4, $title, "modal-title"));
    }

}