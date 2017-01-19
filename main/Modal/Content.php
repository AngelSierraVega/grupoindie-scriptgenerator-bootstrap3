<?php
/*
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\DML\Bootstrap3\Modal;

use \GIndie\DML\HTML5 as HTML5;

/**
 * 
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @since 2017-01-18
 * @version beta.00.01
 */
class Content extends \GIndie\DML\HTML5\Node {

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
            parent::__construct("div",false,["class"=>"modal-content"]);
            //$this->setAttribute("class", "modal-content");
            $this->_header = $this->addContent( new Content\Header($title, true) );
            $this->_body = $this->addContent( new Content\Body($content) );
            $this->_footer = $this->addContent( new Content\Footer(true) );
            if ($footer !== null) {
                $this->_footer->addContent($footer);
            }
        } catch (Exception $e) {
            displayError($e);
        }
    }

}

namespace GIndie\DML\Bootstrap3\Modal\Content;

/**
 * 
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @since 2017-01-18
 * @version beta.00.01
 */
class Header extends \GIndie\DML\HTML5\Node {

    /**
     * 
     * @param type $title
     * @param type $btnDismiss
     * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
     * @since 2017-01-18
     * @version beta.00.01
     */
    public function __construct($title, $btnDismiss = true) {
        try {
            parent::__construct("div",false,["class"=>"modal-header"]);
            //$this->setAttribute("class", "modal-header");
            if ($btnDismiss) {
                $btnDismiss = new
                        \GIndie\DML\HTML5\Button(new 
                                \GIndie\DML\HTML5\BuildingBlocks\Span(
                                        ["aria-hidden"=>"true"], ["&times;"])
                        , [
                    "class" => "close",
                    "data-dismiss" => "modal",
                    "aria-label" => "Cerrar"
                ]);
                $this->addContent($btnDismiss);
            }
            $this->addContent(\GIndie\DML\HTML5\Format::Header4($title, ["class" => "modal-title"]));
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
class Body extends \GIndie\DML\HTML5\Node {

    /**
     * 
     * @param type $content
     * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
     * @since 2017-01-18
     * @version beta.00.01
     */
    public function __construct($content = null) {
        try {
            parent::__construct("div",false,["class"=>"modal-body"]);
            //$this->setAttribute("class", "modal-body");
            if($content !== null){
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
class Footer extends \GIndie\DML\HTML5\Node {

    /**
     * 
     * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
     * @since 2017-01-18
     * @version beta.00.01
     * @param boolean $btnDismiss
     */
    public function __construct($btnDismiss = true) {
        try {
            parent::__construct("div",false,["class"=>"modal-footer"]);
            //$this->setAttribute("class", "modal-footer");
            if ($btnDismiss) {
                $btnDismiss = new
                        \GIndie\DML\HTML5\Button("Cerrar" , [
                    "class" => "btn btn-default",
                    "data-dismiss" => "modal"
                ]);
                $this->addContent($btnDismiss);
            }
        } catch (Exception $e) {
            displayError($e);
        }
    }

}