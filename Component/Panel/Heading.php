<?php

/*
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\ScriptGenerator\Bootstrap3\Component\Panel;

use GIndie\ScriptGenerator\HTML5\Category\Basic;
use GIndie\ScriptGenerator\HTML5\Category\StylesSemantics;
use GIndie\ScriptGenerator\HTML5\Category\StylesSemantics\Div;

/**
 * The heading of the panel component.
 * 
 * @package     Bootstrap3
 * @category    ComponentLibs
 * 
 * @copyright   (c) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * @version     GIG-BTSP3.00.01
 * @since       2017-05-20
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * 
 * 
 * @edit SG-BTSP3.00.01 18-02-02
 * - Added tests from HeadingTest
 * - Deleted HeadingTest
 */
class Heading extends Div
{

    private $_title;

    /**
     * Creates a new heading.
     * @since   GIG-BTSP3.00.01
     * 
     * @param   mixed|NULL $title The optional title to add to the panel heading.
     * 
     * @ut_str construct "<div class="panel-heading"></div>"
     * 
     * @ut_params @ut_params "Title"
     * @ut_str constructString "<div class="panel-heading"><h3 class="panel-title">Title</h3></div>"
     * @edit 18-03-21
     * - Added btnGroup
     */
    public function __construct($title = \NULL)
    {
        parent::__construct("", ["class" => "panel-heading"]);
        $this->btnGroup = $this->addContentGetPointer(StylesSemantics::Div("", ["class" => "btn-group pull-right"]));
        ($title === \NULL || $title === \FALSE ) ?: $this->setTitle($title);
    }

    /**
     * @todo
     */
    public static function setTitleTEST()
    {
        $expected = "<div class=\"panel-heading\"><h4 class=\"panel-title\">IsChanged</h4></div>";
        $result = new Heading("Title");
        $result->setTitle("IsChanged", 4);
        static::execStrCmp($expected, $result);
    }

    /**
     * Sets the title.
     * @since   GIG-BTSP3.00.01
     * 
     * @param   mixed $title
     * @param   int $headerLevel 1 thru 6 to specify the header level (h1,h2...)
     */
    public function setTitle($title, $headerLevel = 3)
    {
        if (!isset($this->_title)) {
            //var_dump("TESTANGEL");
            $pointTitle = Basic::Header($headerLevel, $title);
            $this->_title = &$pointTitle;
            $this->_title->addClass("panel-title");
            //$pointTitle = &$this->_title;
            $this->addContent($this->_title);
        } else {
            //unset($this->_title);
//            $this->_title = Basic::Header(5,$title);
//            $this->_title->addClass("panel-title2");
            $this->_title->removeContent();
            $this->_title->addContent($title);
            $this->_title->setTag("h" . $headerLevel);
        }
    }

    /**
     * @since 18-03-21
     * @return \GIndie\ScriptGenerator\HTML5\Category\StylesSemantics\Div
     */
    public function getBtnGroup()
    {
        return $this->btnGroup;
    }

    /**
     * @since 18-03-21
     * @return \GIndie\ScriptGenerator\HTML5\Category\Basic\Header
     */
    public function getTitle()
    {
        return $this->_title;
    }

    /**
     * @since 18-03-21
     * @var \GIndie\ScriptGenerator\HTML5\Category\StylesSemantics\Div 
     */
    private $btnGroup;

}
