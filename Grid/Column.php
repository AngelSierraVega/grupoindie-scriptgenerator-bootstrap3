<?php

/**
 * GI-SG3-Bootstrap3-DVLP - Column
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
 * Description of Column
 *
 */
class Column extends Div implements Screensizes
{

    /**
     * 18-06-23
     * @param string $screenSize
     * @param int $columnSize
     * @edit 18-12-07
     */
    public function __construct($screenSize, $columnSize)
    {
        parent::__construct();
        $this->addSize($screenSize, $columnSize);
    }

    /**
     * 
     * @since 18-06-23
     * @param string $screenSize
     * @param int $colSize If var is greater than 12 the value is 12, if lower
     * than 1 value is 1.
     * @return \GIndie\ScriptGenerator\Bootstrap3\Grid\Column
     */
    public function addSize($screenSize, $colSize)
    {
        switch (true)
        {
            case $colSize > 12:
                $colSize = 12;
                break;
            case $colSize < 1:
                $colSize = 1;
                break;
        }
        $this->addClass($screenSize . "-" . $colSize);
        return $this;
    }

}
