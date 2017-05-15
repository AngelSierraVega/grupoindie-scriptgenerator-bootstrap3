<?php

/*
 * Copyright (C) 2016 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIgenerator\DML\HTML5\Bootstrap3;

trait BootstrapClass {

    protected $baseClass;

}

trait ContextualColors {

    public static $COLOR_DEFAULT = "default";
    public static $COLOR_PRIMARY = "primary";
    public static $COLOR_SUCCESS = "success";
    public static $COLOR_DANGER = "danger";
    public static $COLOR_INFO = "info";
    public static $COLOR_WARNING = "warning";
    public static $COLOR_MUTED = "muted";

    use BootstrapClass;

    public function setContext($context, $removeContext = true) {
        if ($this->baseClass) {
            if ($removeContext) {
                $this->removeClass($this->baseClass . "-" . static::$COLOR_DANGER);
                $this->removeClass($this->baseClass . "-" . static::$COLOR_DEFAULT);
                $this->removeClass($this->baseClass . "-" . static::$COLOR_INFO);
                $this->removeClass($this->baseClass . "-" . static::$COLOR_MUTED);
                $this->removeClass($this->baseClass . "-" . static::$COLOR_PRIMARY);
                $this->removeClass($this->baseClass . "-" . static::$COLOR_SUCCESS);
                $this->removeClass($this->baseClass . "-" . static::$COLOR_WARNING);
            }
            return $this->addClass($this->baseClass . "-" . $context);
        } else {
            throw new \Exception(__CLASS__ . ": baseClass must be defined.");
            return false;
        }
    }

}

trait ContextualBackgrounds {

    public static $BKGRND_PRIMARY = "primary";
    public static $BKGRND_SUCCESS = "success";
    public static $BKGRND_DANGER = "danger";
    public static $BKGRND_INFO = "info";
    public static $BKGRND_WARNING = "warning";
    private $_baseClass = "bg";

    public function setBackground($background, $removeBackground = true) {
        if ($removeBackground) {
            $this->removeClass($this->_baseClass . "-" . static::$BKGRND_DANGER);
            $this->removeClass($this->_baseClass . "-" . static::$BKGRND_INFO);
            $this->removeClass($this->_baseClass . "-" . static::$BKGRND_PRIMARY);
            $this->removeClass($this->_baseClass . "-" . static::$BKGRND_SUCCESS);
            $this->removeClass($this->_baseClass . "-" . static::$BKGRND_WARNING);
        }
        return $this->addClass($this->_baseClass . "-" . $background);
    }

}

//require_once __DIR__ . '/../HTML5/dist/HTML5.phar';
//require_once __DIR__ . '/../GI_DML_HTML5/main.php';
//require_once __DIR__ .'/main/Node.php';
require_once __DIR__ . '/main/Button.php';
require_once __DIR__ . '/main/Dropdown.php';
require_once __DIR__ . '/main/Modal.php';
require_once __DIR__ . '/main/Panel.php';
require_once __DIR__ . '/main/Document.php';

class Factory {

    public static function Document($title, $lang = "en", $doctype = 'html', $charset = 'UTF-8') {
        return new Document($title, $lang);
    }

    public static function Hyperlink($link, $content, $target = NULL) {
        return new \GIgenerator\DML\HTML5\Links\Hyperlink($link, $content, $target);
    }
    
    public static function Button($content = null, $type = 0) {
        return new GIgenerator\DML\HTML5\Bootstrap3\Button($content = null, $type = 0);
    }

}
