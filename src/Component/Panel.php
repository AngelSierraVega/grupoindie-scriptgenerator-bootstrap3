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

use GIndie\Generator\DML\Node;
use GIndie\Generator\DML\HTML5;
use GIndie\Generator\DML\HTML5\Category\StylesSemantics\Div;
use GIndie\Generator\DML\HTML5\Bootstrap3\ContextualColors;

/**
 * Description of Panel
 * 
 * @since       2017-04-23
 * @version     GIG.BTS3.00
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 */
class Panel extends Div {

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
     * @todo Método agregar/definir contenido
     * @var GIndie\Generator\DML\Node Placeholder for the content between heading and body.
     */
    private $_heading_body;

    /**
     * @todo Método agregar/definir contenido
     * @var GIndie\Generator\DML\Node Placeholder for the content between body and footer.
     */
    private $_body_footer;

    public function __construct($heading = \FALSE, $heading_body = \FALSE,
            $body = \TRUE, $body_footer = \FALSE, $footer = \FALSE) {
        parent::__construct("", ["class" => "panel panel-default"]);
        $this->baseClass = "panel";
        //$this->addClass($this->baseClass);
        //$this->addClass($classnames);
        //$this->setContext(static::$COLOR_DEFAULT, \FALSE);
        $heading === \FALSE ?: $this->setHeading($heading);
        $heading_body === \FALSE ?: $this->setHeadingBody($heading_body);
        $body === \FALSE ?: $this->setBody($body);
        $body_footer === \FALSE ?: $this->setBodyFooter($body_footer);
        $footer === \FALSE ?: $this->setFooter($footer);
    }

    public function setHeading($heading) {
        unset($this->_heading);
        if (is_bool($heading)) {
            $heading !== \TRUE ?: $this->_heading = $this->addContentGetPointer(new Panel\Heading());
        } else {
            if (is_subclass_of($heading, __NAMESPACE__ . "Panel\Heading")) {
                $this->_heading = $this->addContentGetPointer($heading);
            } else {
                $this->_heading = $this->addContentGetPointer(new Panel\Heading($heading));
            };
        }
        return $this;
    }

    public function setHeadingBody($heading_body) {
        unset($this->_heading_body);
        switch (\TRUE) {
            case (\TRUE === $heading_body):
                $this->_heading_body = $this->addContentGetPointer(Node::ContentOnly([]));
                break;
            case (\FALSE === $heading_body):
                break;
            default:
                if (is_array($heading_body)) {
                    $this->_heading_body = $this->addContentGetPointer(Node::ContentOnly($heading_body));
                } else {
                    $this->_heading_body = $this->addContentGetPointer(Node::ContentOnly([$heading_body]));
                }
                break;
        }
        return $this;
    }

    public function setBody($body) {
        unset($this->_body);
        switch (\TRUE) {
            case (\TRUE === $body):
                $this->_body = $this->addContentGetPointer(new Panel\Body());
                break;
            case (\FALSE == $body):
                break;
            default:
                if (is_subclass_of($body, __NAMESPACE__ . "Panel\Body")) {
                    $this->_body = $this->addContentGetPointer($body);
                } else {
                    $this->_body = $this->addContentGetPointer(new Panel\Body($body));
                }
                break;
        }
        return $this;
    }

    public function setBodyFooter($body_footer) {
        unset($this->_body_footer);
        switch (\TRUE) {
            case (\TRUE === $body_footer):
                $this->_body_footer = $this->addContentGetPointer(Node::ContentOnly([]));
                break;
            case (\FALSE === $body_footer):
                break;
            default:
                if (is_array($body_footer)) {
                    $this->_body_footer = $this->addContentGetPointer(Node::ContentOnly($body_footer));
                } else {
                    $this->_body_footer = $this->addContentGetPointer(Node::ContentOnly([$body_footer]));
                }
                break;
        }
        return $this;
    }

    public function setFooter($footer) {
        unset($this->_footer);
        switch (\TRUE) {
            case (\TRUE === $footer):
                $this->_footer = $this->addContentGetPointer(new Panel\Footer());
                break;
            case (\FALSE === $footer):
                break;
            default:
                if (is_subclass_of($footer, __NAMESPACE__ . "Panel\Footer")) {
                    $this->_footer = $this->addContentGetPointer($footer);
                } else {
                    $this->_footer = $this->addContentGetPointer(new Panel\Footer($footer));
                }
                break;
        }
        return $this;
    }

}

/**
 * Class MetaTest
 *
 * @package GIndie\Generator\DML\HTML5\Category
 * @author Liliana Hernández Castañeda <liliana.hercast@gmail.com>
 */
class PanelTest extends \GIndie\Test {

    /**
     * @test
     * @internal 
     */
    public static function construct01() {
        $expected = "<div class=\"panel panel-default\"></div>";
        $result = new Panel(\FALSE, \FALSE, \FALSE, \FALSE, \FALSE);
        static::execStrCmp($expected, $result);
    }

    public static function construct02() {
        $expected = "<div class=\"panel panel-default\"><div class=\"panel-heading\"><h3 class=\"panel-title\">TITLE</h3></div></div>";
        $result = new Panel('TITLE', \FALSE, \FALSE, \FALSE, \FALSE);
        static::execStrCmp($expected, $result);
    }

    public static function construct03() {
        $expected = "<div class=\"panel panel-default\"><div class=\"panel-heading\"><h3 class=\"panel-title\">TITLE</h3></div><span></span></div>";
        $result = new Panel("TITLE", "<span></span>", \FALSE, \FALSE, \FALSE);
        static::execStrCmp($expected, $result);
    }

    public static function construct04() {
        $expected = "<div class=\"panel panel-default\"><div class=\"panel-heading\"><h3 class=\"panel-title\">TITLE</h3></div><span></span><div class=\"panel-body\">This is the content</div></div>";
        $result = new Panel('TITLE', "<span></span>", 'This is the content',
                \FALSE, \FALSE);
        static::execStrCmp($expected, $result);
    }

    public static function construct05() {
        $expected = "<div class=\"panel panel-default\"><div class=\"panel-heading\"><h3 class=\"panel-title\">TITLE</h3></div><span></span><div class=\"panel-body\">This is the content</div><span></span></div>";
        $result = new Panel('TITLE', "<span></span>", 'This is the content',
                '<span></span>', \FALSE);
        static::execStrCmp($expected, $result);
    }

    public static function construct06() {
        $expected = "<div class=\"panel panel-default\"><div class=\"panel-heading\"><h3 class=\"panel-title\">TITLE</h3></div><span></span><div class=\"panel-body\">This is the content</div><span></span><div class=\"panel-footer\">Footer</div></div>";
        $result = new Panel('TITLE', '<span></span>', 'This is the content',
                '<span></span>', 'Footer');
        static::execStrCmp($expected, $result);
    }

}
