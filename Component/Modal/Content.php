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
 * @version 00.B0
 * @edit 19-04-17
 * - Deprecated use of GlobalAttributes
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

    /**
     * 
     * @return \GIndie\ScriptGenerator\Bootstrap3\Component\Modal\Header
     * @since 2017-01-18
     */
    public function getHeader()
    {
        return $this->_header;
    }

    /**
     * 
     * @return type
     * @since 2017-01-18
     */
    public function getBody()
    {
        return $this->_body;
    }

    /**
     * 
     * @return type
     * @since 2017-01-18
     */
    public function getFooter()
    {
        return $this->_footer;
    }

    /**
     * 
     * @param type $content
     * @return $this
     * @since 2017-01-18
     */
    public function addContent($content)
    {
        //parent::addContent($content);
        $this->_body->addContent($content);
        return $this;
    }

    /**
     * 
     * @param type $content
     * @return type
     * @since 2017-01-18
     */
    public function addFooterContent($content)
    {
        return $this->_footer->addContent($content);
    }

    /**
     * 
     * @param type $button
     * @return type
     * @since 2017-01-18
     */
    public function addFooterButton($button)
    {
        return $this->_footer->addButton($button);
    }

}
