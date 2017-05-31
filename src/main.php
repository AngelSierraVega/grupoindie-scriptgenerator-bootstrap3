<?php

/**
 * GIG-DML-HTML5-Bootstrap3 - Document 2016-12-28
 * @copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * @package Bootstrap3
 *
 * @version GIG-BTSP3.00.01
 */

namespace GIndie\Generator\DML\HTML5\Bootstrap3;

spl_autoload_register(function($className) {
    if (substr($className, -4) == 'Test') {
        $className = substr($className, 0, \strrpos($className, "Test"));
    }
    $edited = substr($className,
            strlen(__NAMESPACE__) + strrpos($className, __NAMESPACE__));
    $edited = str_replace("\\", \DIRECTORY_SEPARATOR, __DIR__ . $edited) . ".php";
    if (is_readable($edited)) {
        require_once($edited);
    }
});

/**
 * 
 */
trait BootstrapClass {

    /**
     *
     * @var type 
     */
    protected $baseClass;

}

/**
 * 
 */
trait ContextualColors {

    public static $COLOR_DEFAULT = "default";
    public static $COLOR_PRIMARY = "primary";
    public static $COLOR_SUCCESS = "success";
    public static $COLOR_DANGER = "danger";
    public static $COLOR_INFO = "info";
    public static $COLOR_WARNING = "warning";
    public static $COLOR_MUTED = "muted";

    use BootstrapClass;

    public function setContext($context, $removeContext = \TRUE) {

        if ($this->baseClass) {
            //var_dump($this);
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

/**
 * 
 */
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

/**
 * 
 */
class Factory {

    public static function Document($title, $lang = "en", $doctype = 'html',
            $charset = 'UTF-8') {
        return new Document($title, $lang);
    }

    public static function Hyperlink($link, $content, $target = NULL) {
        return new \GIndie\Generator\DML\HTML5\Category\Links\Hyperlink($link,
                $content, $target);
    }

    public static function Button($content = null, $type = 0) {
        return new GIgenerator\DML\HTML5\Bootstrap3\Button($content = null,
                $type = 0);
    }

}
