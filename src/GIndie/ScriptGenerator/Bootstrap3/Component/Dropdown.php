<?php

/*
 * Copyright (C) 2016 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\Generator\DML\HTML5\Bootstrap3\Component;

use GIndie\Generator\DML\HTML5\Category\StylesSemantics;
use GIndie\Generator\DML\HTML5\Category\Lists;

/**
 * 
 * @version beta.00.01
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @since 2017-01-04
 */
class Dropdown extends StylesSemantics\Div {

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
    public function __construct($brand, array $listElements,
            $customToggleTag = null) {
        //parent::__construct("div", false, );
        parent::__construct([]);
        $this->addClass("dropdown");
        $this->_toggle = $this->addContentGetPointer(new Dropdown\Toggle($brand));
        if ($customToggleTag !== null) {
            $this->_toggle->setTag($customToggleTag);
        }
        $this->_menu = $this->addContentGetPointer(Lists::Unordered($listElements));
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
        return $this->_menu->addListElement($element);
    }

}
