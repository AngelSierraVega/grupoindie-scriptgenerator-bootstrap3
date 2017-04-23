<?php

/*
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIgenerator\DML\HTML5\Bootstrap3\Modal;

use \GIgenerator\DML\HTML5 as HTML5;
use \GIgenerator\DML\HTML5\Bootstrap3 as Bootstrap3;

/**
 * 
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @since 2017-01-18
 * @version beta.00.01
 */
class Content extends \GIgenerator\DML\HTML5\Node {

    /**
     *
     * @var type 
     */
    private $_header;

    /**
     *
     * @var type 
     */
    private $_body;

    /**
     *
     * @var type 
     */
    private $_footer;

    /**
     * 
     * @param type $title
     * @param type $content
     * @param type $footer
     * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
     * @since 2017-01-18
     * @version beta.00.01
     */
    public function __construct($title, $content = null, $footer = null) {
        try {
            parent::__construct("div", false, ["class" => "modal-content"]);
            //$this->setAttribute("class", "modal-content");
            $this->_header = $this->addContent(new Content\Header($title, true));
            $this->_body = $this->addContent(new Content\Body($content));
            $this->_footer = $this->addContent(new Content\Footer(true));
            if ($footer !== null) {
                $this->_footer->addContent($footer);
            }
        } catch (Exception $e) {
            displayError($e);
        }
    }

    public function addFooterContent($content) {
        try {
            return $this->_footer->addContent($content);
        } catch (Exception $e) {
            displayError($e);
        }
    }

    public function addFooterButton($button) {
        try {
            return $this->_footer->addButton($button);
        } catch (Exception $e) {
            displayError($e);
        }
    }

//    public function addSubmitButton($name = "Aceptar"){
//        try {
//            $btn = new HTML5\Button($name, ["form"=>"gip-modal-form","value"=>"Submit"], HTML5\Button::TYPE_SUBMIT);
//            $this->_footer->addContent($btn);
//        } catch (Exception $e) {
//            displayError($e);
//        }
//    }
}

namespace GIgenerator\DML\HTML5\Bootstrap3\Modal\Content;

use \GIgenerator\DML\HTML5 as HTML5;
use \GIgenerator\DML\HTML5\Bootstrap3 as Bootstrap3;

/**
 * 
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @since 2017-01-18
 * @version beta.00.01
 */
class Header extends \GIgenerator\DML\HTML5\Node {

    use \GIgenerator\DML\HTML5\Bootstrap3\ContextualBackgrounds;

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
                    \GIgenerator\DML\HTML5\FormInput\Button(new
                    \GIgenerator\DML\HTML5\StylesSemantics\Span(
                    ["&times;"],["aria-hidden" => "true"] )
            );
            $btnDismiss->addClass("close");
            $btnDismiss->setAttribute("data-dismiss", "modal");
            $btnDismiss->setAttribute("aria-label", "Cerrar");
            $this->addContent($btnDismiss);
        }
        $this->addContent(\GIgenerator\DML\HTML5\Basic::Header(4, $title, "modal-title"));
    }

}

/**
 * 
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @since 2017-01-18
 * @version beta.00.01
 */
class Body extends \GIgenerator\DML\HTML5\Node {

    /**
     * 
     * @param type $content
     * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
     * @since 2017-01-18
     * @version beta.00.01
     */
    public function __construct($content = null) {
        try {
            parent::__construct("div", false, ["class" => "modal-body"]);
            //$this->setAttribute("class", "modal-body");
            if ($content !== null) {
                $this->addContent($content);
            }
        } catch (Exception $e) {
            displayError($e);
        }
    }

}

/**
 * 
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @since 2017-01-18
 * @version beta.00.01
 */
class Footer extends \GIgenerator\DML\HTML5\Node {

    private $_btnGroup;

    /**
     * 
     * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
     * @since 2017-01-18
     * @version beta.00.01
     * @param boolean $btnDismiss
     */
    public function __construct($btnDismiss = true) {
        parent::__construct("div", false, ["class" => "modal-footer"]);
        $this->_btnGroup = $this->addContent(\GIgenerator\DML\HTML5\Node::Simple("div", [
                    "class" => "btn-group",
                    "role" => "group",
                    "aria-label" => "..."])
        );
        if ($btnDismiss) {
            //$btnDismiss = \GIgenerator\DML\HTML5\Bootstrap3\Factory::Button($content, 0);
            //$btnDismiss = new \GIgenerator\DML\HTML5\Bootstrap3\Button($content, $type);
            $btnDismiss = new Bootstrap3\Button("Cerrar", Bootstrap3\Button::$TYPE_BUTTON);
            $btnDismiss->setAttribute("data-dismiss", "modal");
            //$btnDismiss->addClass();
//                \GIgenerator\DML\HTML5\FormInput\Button("Cerrar", [
//                    "class" => "btn btn-default",
//                    "data-dismiss" => "modal"
//                ]);
            $this->addButton($btnDismiss);
        }
    }

    public function addButton($button) {
        try {
            return $this->_btnGroup->addContent($button);
        } catch (Exception $e) {
            displayError($e);
        }
    }

}
