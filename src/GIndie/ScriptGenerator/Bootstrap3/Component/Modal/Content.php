<?php

/*
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

//namespace GIndie\ScriptGenerator\Bootstrap3\Modal;

namespace GIndie\ScriptGenerator\Bootstrap3\Component\Modal;

use GIndie\ScriptGenerator\HTML5;
use GIndie\ScriptGenerator\Bootstrap3;

/**
 * 
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @since 2017-01-18
 * @version beta.00.01
 */
class Content extends HTML5\Node
{

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
    public function __construct($title, $content = null, $footer = null)
    {
        parent::__construct(static::TYPE_DEFAULT, "div", ["class" => "modal-content"]);
        //parent::__construct( "div", false, ["class" => "modal-content"]);
        //$this->setAttribute("class", "modal-content");
        $this->_header = $this->addContentGetPointer(new Header($title, true));
        $this->_body = $this->addContentGetPointer(new Body($content));
        $this->_footer = $this->addContentGetPointer(new Footer(true));
        if ($footer !== null) {
            $this->_footer->addContent($footer);
        }
    }

    public function addContent($content)
    {
        //parent::addContent($content);
        return $this->_body->addContent($content);
    }

    public function addFooterContent($content)
    {
        return $this->_footer->addContent($content);
    }

    public function addFooterButton($button)
    {
        return $this->_footer->addButton($button);
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
