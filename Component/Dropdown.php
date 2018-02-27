<?php

/*
 * Copyright (C) 2016 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\ScriptGenerator\Bootstrap3\Component;

use GIndie\ScriptGenerator\HTML5\Category\StylesSemantics;
use GIndie\ScriptGenerator\HTML5\Category\Lists;

/**
 * 
 * @version beta.00.01
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @since 2017-01-04
 */
class Dropdown extends StylesSemantics\Div
{

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
     * @ut_params2 construct "brandName" ["element"=>"test"]
     * @ut_params construct "brandName" []
     * @ut_str construct "<div class="dropdown"><span class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">brandNameArray <span class="caret"></span></span><ul class="dropdown-menu"></ul></div>"
     */
    public function __construct($brand, array $listElements = [], $customToggleTag = null)
    {
        parent::__construct([]);
        $this->addClass("dropdown");
        $this->_toggle = $this->addContentGetPointer(new Dropdown\Toggle($brand));
        if ($customToggleTag !== null) {
            $this->_toggle->setTag($customToggleTag);
        }
        $this->_menu = $this->addContentGetPointer(Lists::Unordered($listElements));
        $this->_menu->addClass("dropdown-menu");
    }

    /**
     * 
     * @param type $element
     * @return type
     * @version beta.00.01
     * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
     * @since 2017-01-04
     * 
     * @ut_factory addListElement __construct construct
     * @ut_params addListElement "element"
     * @ut_str addListElement "<div class="dropdown"><span class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="caret"></span></span><ul class="dropdown-menu"><li>element</li></ul></div>"
     */
    public function addListElement($element)
    {
        $this->_menu->addListElement($element);
        return $this;
    }

}
