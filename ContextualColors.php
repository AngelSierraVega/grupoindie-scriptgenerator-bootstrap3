<?php

/**
 * SG-Bootstrap3 - ContextualColors
 */

namespace GIndie\ScriptGenerator\Bootstrap3;

/**
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (c) 2018 Angel Sierra Vega. Grupo INDIE.
 * @license file://LICENSE MIT License
 *
 * @package ScriptGenerator
 * @subpackage Bootstrap3
 *
 * @version 00.B0
 * @since 18-01-18
 * @edit SG-BTSP3.00.01
 * - Added code from main (?)
 */
trait ContextualColors
{

    /**
     * @since SG-BTSP3.00.01
     * @var type 
     */
    public static $COLOR_DEFAULT = "default";

    /**
     * @since SG-BTSP3.00.01
     * @var type 
     */
    public static $COLOR_PRIMARY = "primary";

    /**
     * @since SG-BTSP3.00.01
     * @var type 
     */
    public static $COLOR_SUCCESS = "success";

    /**
     * @since SG-BTSP3.00.01
     * @var type 
     */
    public static $COLOR_DANGER = "danger";

    /**
     * @since SG-BTSP3.00.01
     * @var type 
     */
    public static $COLOR_INFO = "info";

    /**
     * @since SG-BTSP3.00.01
     * @var type 
     */
    public static $COLOR_WARNING = "warning";

    /**
     * @since SG-BTSP3.00.01
     * @var type 
     */
    public static $COLOR_MUTED = "muted";

    /**
     * @since SG-BTSP3.00.01
     */
    use BootstrapClass;

    /**
     * 
     * @since SG-BTSP3.00.01
     * 
     * @param type $context
     * @param type $removeContext
     * 
     * @return boolean
     * @throws \Exception
     */
    public function setContext($context, $removeContext = \TRUE)
    {
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
        }
    }

}
