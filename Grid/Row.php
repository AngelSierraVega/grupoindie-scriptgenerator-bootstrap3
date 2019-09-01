<?php

/**
 * GI-SG3-Bootstrap3-DVLP - Row
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (c) 2018 Angel Sierra Vega. Grupo INDIE.
 * @license file://LICENSE MIT License
 *
 * @package \GIndie\ScriptGenerator\Bootstrap3
 *
 * @since 18-06-23
 * @version 00.BB
 * @todo
 * - Class unit test
 * - Complete class documentation
 */

namespace GIndie\ScriptGenerator\Bootstrap3\Grid;

use GIndie\ScriptGenerator\HTML5\Category\StylesSemantics\Div;
use GIndie\ScriptGenerator\Bootstrap3\Screensizes;

/**
 * Description of Row
 *
 */
class Row extends Div implements Screensizes
{

    /**
     * @since 18-06-23
     */
    public function __construct()
    {
        parent::__construct();
        $this->addClass("row");
    }


    /**
     * @since 18-06-24
     * @param mixed $content
     * @deprecated since 18-06-24
     */
    public function addContentGetPointer($content)
    {
        \trigger_error("Use addColumn() or addColumnGP() instead",
                       \E_USER_DEPRECATED);
        return parent::addContentGetPointer($content);
    }

    /**
     * @since 18-06-24
     * @param string $screenSize
     * @param int $colSize If var is greater than 12 the value is 12, if lower
     * than 1 value is 1.
     * @return \GIndie\ScriptGenerator\Bootstrap3\Grid\Row
     */
    public function addColumn($screenSize, $colSize)
    {
        $this->addColumnGP($screenSize, $colSize);
        return $this;
    }

    /**
     * @since 18-06-24
     * @param string $screenSize
     * @param int $colSize If var is greater than 12 the value is 12, if lower
     * than 1 the value is 1.
     * @return \GIndie\ScriptGenerator\Bootstrap3\Grid\Column
     */
    public function addColumnGP($screenSize, $colSize)
    {
        $rtnElement = parent::addContentGetPointer(new Column($screenSize,
                                                              $colSize));
        $this->column[] = $rtnElement;
        return $rtnElement;
    }

    /**
     * 
     * @since 18-06-23
     * 
     * @param null|int $colIndex
     * @return GIndie\ScriptGenerator\Bootstrap3\Grid\Column
     */
    public function getColumn($colIndex = null)
    {
        switch (true)
        {
            case empty($this->column):
                \trigger_error("No columns defined in row", \E_USER_ERROR);
                break;
            case \is_null($colIndex):
                $colIndex = \count($this->column) - 1;
                break;
        }
        return $this->column[$colIndex];
    }

    /**
     * @since 18-06-24
     * @return array
     */
    public function getColumns()
    {
        return $this->column;
    }

    /**
     * @since 18-06-23
     * @var GIndie\ScriptGenerator\Bootstrap3\Grid\Column 
     */
    private $column = [];

}
