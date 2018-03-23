<?php

namespace GIndie\ScriptGenerator\Bootstrap3\Component;

use GIndie\ScriptGenerator\HTML5\Category\StylesSemantics;
use GIndie\ScriptGenerator\Bootstrap3;

/**
 * Provide contextual feedback messages for typical user actions with the handful of available and flexible alert messages.
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (c) 2018 Angel Sierra Vega. Grupo INDIE.
 *
 * @package ScriptGenerator
 * @subpackage Bootstrap3
 *
 * @version SG-BTSP3.00.00 18-02-19 Empty class created.
 * @edit SG-BTSP3.00.01
 * - Class extends from \GIndie\ScriptGenerator\HTML5\Category\StylesSemantics\Div
 * - Class uses ContextualColors, BootstrapClass
 * - Created __construct(), success(), info(), warning(), danger()
 */
class Alert extends StylesSemantics\Div
{

    /**
     * @since SG-BTSP3.00.01
     * @edit 18-03-23
     * - Removed use Bootstrap3\BootstrapClass;
     */
    use Bootstrap3\ContextualColors;

    /**
     * 
     * @param mixed|null $content
     * @param boolean $dismissible
     * 
     * @return \GIndie\ScriptGenerator\Bootstrap3\Component\Alert
     * 
     * @since SG-BTSP3.00.01
     */
    public static function success($content = null, $dismissible = false)
    {
        return new static(static::$COLOR_SUCCESS, $content, $dismissible);
    }

    /**
     * 
     * @param mixed|null $content
     * @param boolean $dismissible
     * 
     * @return \GIndie\ScriptGenerator\Bootstrap3\Component\Alert
     * 
     * @since SG-BTSP3.00.01
     */
    public static function info($content = null, $dismissible = false)
    {
        return new static(static::$COLOR_INFO, $content, $dismissible);
    }

    /**
     * 
     * @param mixed|null $content
     * @param boolean $dismissible
     * 
     * @return \GIndie\ScriptGenerator\Bootstrap3\Component\Alert
     * 
     * @since SG-BTSP3.00.01
     */
    public static function warning($content = null, $dismissible = false)
    {
        return new static(static::$COLOR_WARNING, $content, $dismissible);
    }

    /**
     * 
     * @param mixed|null $content
     * @param boolean $dismissible
     * 
     * @return \GIndie\ScriptGenerator\Bootstrap3\Component\Alert
     * 
     * @since SG-BTSP3.00.01
     */
    public static function danger($content = null, $dismissible = false)
    {
        return new static(static::$COLOR_DANGER, $content, $dismissible);
    }

    /**
     * 
     * @param string $context
     * @param type $content
     * @param boolean $dismissible
     * 
     * @since SG-BTSP3.00.01
     */
    public function __construct($context, $content = null, $dismissible = false)
    {
        parent::__construct($content);
        $this->baseClass = "alert";
        $this->addClass($this->baseClass);
        $this->setAttribute("role", "alert");
        $this->setContext($context);
        if ($dismissible === true) {
            $this->addClass("alert-dismissible");
        }
    }

}
