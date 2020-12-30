<?php

/**
 * SG-Bootstrap3 - ContextualBackgrounds
 *
 */

namespace GIndie\ScriptGenerator\Bootstrap3;

/**
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (CC) 2020 Angel Sierra Vega. Grupo INDIE.
 * @license file://LICENSE
 *
 * @package ScriptGenerator
 * @subpackage Bootstrap3
 *
 * @version 00.B0
 * @since 18-01-18
 * @edit SG-BTSP3.00.01
 * - Added code from main (?)
 */
trait ContextualBackgrounds
{

    /**
     * @since SG-BTSP3.00.01
     * @var type 
     */
    public static $BKGRND_PRIMARY = "primary";

    /**
     * @since SG-BTSP3.00.01
     * @var type 
     */
    public static $BKGRND_SUCCESS = "success";

    /**
     * @since SG-BTSP3.00.01
     * @var type 
     */
    public static $BKGRND_DANGER = "danger";

    /**
     * @since SG-BTSP3.00.01
     * @var type 
     */
    public static $BKGRND_INFO = "info";

    /**
     * @since SG-BTSP3.00.01
     * @var type 
     */
    public static $BKGRND_WARNING = "warning";

    /**
     * @since SG-BTSP3.00.01
     * @var type 
     */
    private $_baseClass = "bg";

    /**
     * @since SG-BTSP3.00.01
     * 
     * @param type $background
     * @param type $removeBackground
     * @return type
     */
    public function setBackground($background, $removeBackground = true)
    {
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
