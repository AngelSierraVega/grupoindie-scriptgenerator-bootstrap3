<?php

/*
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, share, study and 
 * modify it but not distribute it under the terms of the GNU General 
 * Public License as published by the Free Software Foundation, either 
 * version 3 of the License, or (at your option) any later version.
 */

namespace GIgenerator\DML\HTML5\Bootstrap3;

/**
 * 
 * @version beta.00.01
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @since 2017-01-04
 */
class Dropdown extends \GIgenerator\DML\HTML5\StylesSemantics\Div {

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
    public function __construct($brand, array $listElements, $customToggleTag = null) {
        //parent::__construct("div", false, );
        parent::__construct([]);
        $this->addClass("dropdown");
        $this->_toggle = $this->addContent(new Dropdown\Toggle($brand));
        if ($customToggleTag !== null) {
            $this->_toggle->setTag($customToggleTag);
        }
        $this->_menu = $this->addContent(\GIgenerator\DML\HTML5\Lists::Unordered($listElements));
        $this->_menu->setAttribute("class", "dropdown-menu");
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

namespace GIgenerator\DML\HTML5\Bootstrap3\Dropdown;

/**
 * 
 * @version beta.00.01
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @since 2017-01-04
 */
class Toggle extends \GIgenerator\DML\HTML5\StylesSemantics\Span {

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
        parent::__construct([$content], $attributes);
        $this->addContent(" ");
        $this->addContent(new \GIgenerator\DML\HTML5\StylesSemantics\Span([], ["class" => "caret"]));
    }

}
