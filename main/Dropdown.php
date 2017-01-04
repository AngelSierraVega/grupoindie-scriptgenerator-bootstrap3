<?php

/*
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, share, study and 
 * modify it but not distribute it under the terms of the GNU General 
 * Public License as published by the Free Software Foundation, either 
 * version 3 of the License, or (at your option) any later version.
 */

namespace GIndie\DML\Bootstrap3;

/**
 * 
 * @version beta.00.01
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @since 2017-01-04
 */
class Dropdown extends \GIndie\DML\HTML5\Node {

    /**
     *
     * @var Dropdown\Toggle 
     */
    private $_toggle;

    /**
     *
     * @var \GIndie\DML\HTML5\List_
     */
    private $_menu;

    /**
     * 
     * @param type $name
     * @param array $listElements
     * @version beta.00.01
     * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
     * @since 2017-01-04
     */
    public function __construct($name, array $listElements) {
        try {
            parent::__construct("div", false, ["class" => "dropdown"]);
            $this->_toggle = $this->addContent(new Dropdown\Toggle($name));
            $this->_menu = $this->addContent(\GIndie\DML\HTML5\List_::Unordered($listElements));
            $this->_menu->setAttribute("class", "dropdown-menu");
        } catch (Exception $e) {
            displayError($e);
        }
    }

    /**
     * 
     * @param type $element
     * @return type
     * @version beta.00.01
     * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
     * @since 2017-01-04
     */
    public function addListElement($element) {
        try {
           return $this->_menu->addListElement($element); 
        } catch (Exception $e) {
            displayError($e);
        }
    }

}

namespace GIndie\DML\Bootstrap3\Dropdown;

/**
 * 
 * @version beta.00.01
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @since 2017-01-04
 */
class Toggle extends \GIndie\DML\HTML5\BuildingBlocks\Span {

    /**
     * 
     * @param type $content
     * @version beta.00.01
     * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
     * @since 2017-01-04
     */
    public function __construct($content) {
        try {
            $attributes = ["class" => "dropdown-toggle"];
            $attributes["data-toggle"] = "dropdown";
            $attributes["role"] = "button";
            $attributes["aria-haspopup"] = "true";
            $attributes["aria-expanded"] = "false";
            parent::__construct($attributes, [$content]);
            $this->addContent(" ");
            $this->addContent(new \GIndie\DML\HTML5\BuildingBlocks\Span(["class" => "caret"]));
        } catch (Exception $e) {
            displayError($e);
        }
    }

}
