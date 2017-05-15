<?php

/*
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIgenerator\DML\HTML5\Bootstrap3;

use \GIgenerator\DML\HTML5 as HTML5;

/**
 * Description of Panel
 * 
 * @since       2017-04-23
 * @version     GIG.BTS3.00
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 */
class Panel extends HTML5\StylesSemantics\Div {

    use ContextualColors;

    /**
     * 
     * @version     GIG.BTS3.00.01
     * @var         GIgenerator\DML\HTML5\Node $_heading
     */
    private $_heading;

    /**
     * 
     * @version     GIG.BTS3.00.01
     * @var         GIgenerator\DML\HTML5\Node $_modalDialog
     */
    private $_body;

    /**
     * 
     * @version     GIG.BTS3.00.01
     * @var         GIgenerator\DML\HTML5\Node $_modalDialog
     */
    private $_footer;

    /**
     * @version     GIG.BTS3.00.01
     * @param mixed $content
     */
    public function __construct($content, $title = NULL, $footer = FALSE) {
        parent::__construct("");
        $this->baseClass = "panel";
        $this->addClass($this->baseClass);
        $this->setContext(static::$COLOR_DEFAULT, false);
        if ($title != NULL) {
            $this->setTitle($title);
        }
        $this->_body = $this->appendContent(HTML5\StylesSemantics::Div($content));
        $this->_body->addClass("panel-body");
        if ($footer) {
            $this->setFooter();
        }
    }

    /**
     * @version     GIG.BTS3.00.01
     * @param       string $title
     * @return      \GIgenerator\DML\HTML5\Bootstrap3\Panel
     */
    public function setTitle($title) {
        if ($this->_heading == NULL) {
            $this->_heading = $this->appendContent(HTML5\StylesSemantics::Div($title));
            $this->_heading->addClass("panel-heading");
        }
        return $this;
    }

    /**
     * @version     GIG.BTS3.00.01
     * @param       string $title
     * @return      \GIgenerator\DML\HTML5\Bootstrap3\Panel
     */
    public function setFooter() {
        if ($this->_footer == NULL) {
            $this->_footer = $this->appendContent(HTML5\StylesSemantics::Div(""));
            $this->_footer->addClass("panel-footer");
        }
        return $this;
    }

}
