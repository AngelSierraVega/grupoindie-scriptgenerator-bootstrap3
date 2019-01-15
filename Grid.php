<?php

/**
 * GI-SG3-Bootstrap3-DVLP - Grid
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (c) 2018 Angel Sierra Vega. Grupo INDIE.
 *
 * @package \GIndie\ScriptGenerator\Bootstrap3
 *
 * @since 18-06-23
 * @version 00.AF
 * @todo
 * - Class unit test
 * - Complete class documentation
 */

namespace GIndie\ScriptGenerator\Bootstrap3;

use GIndie\ScriptGenerator\HTML5\Category\StylesSemantics\Div;
use GIndie\ScriptGenerator\Bootstrap3\Screensizes;

/**
 * Grid systems are used for creating page layouts through a series of rows and 
 * columns that house your content. 
 * 
 * Here's how the Bootstrap grid system works:
 * - Rows must be placed within a .container (fixed-width) or .container-fluid 
 *   (full-width) for proper alignment and padding.
 * - Use rows to create horizontal groups of columns.
 * - Content should be placed within columns, and only columns may be immediate 
 *   children of rows.
 * - Predefined grid classes like .row and .col-xs-4 are available for quickly 
 *   making grid layouts. Less mixins can also be used for more semantic layouts.
 * - Columns create gutters (gaps between column content) via padding. That 
 *   padding is offset in rows for the first and last column via negative margin 
 *   on .rows.
 * - The negative margin is why the examples below are outdented. It's so that 
 *   content within grid columns is lined up with non-grid content.
 * - Grid columns are created by specifying the number of twelve available 
 *   columns you wish to span. For example, three equal columns would use three 
 *   .col-xs-4.
 * - If more than 12 columns are placed within a single row, each group of extra
 *   columns will, as one unit, wrap onto a new line.
 * - Grid classes apply to devices with screen widths greater than or equal to 
 *   the breakpoint sizes, and override grid classes targeted at smaller devices. 
 *   Therefore, e.g. applying any .col-md-* class to an element will not only 
 *   affect its styling on medium devices but also on large devices if a 
 *   .col-lg-* class is not present.

 * @link <https://getbootstrap.com/docs/3.3/css/#grid>
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 */
class Grid extends Div implements Screensizes
{

    /**
     * @since 18-06-23
     */
    const TYPE_CONTAINER = "container";

    /**
     * @since 18-06-23
     */
    const TYPE_CONTAINER_FLUID = "container-fluid";

    /**
     * 
     * @param type $content
     * @param array $attributes
     * @since 18-06-23
     */
    public function __construct($type = "container")
    {
        parent::__construct();
        $this->addClass($type);
    }

    /**
     * @since 18-06-23
     * @var GIndie\ScriptGenerator\Bootstrap3\Grid\Row 
     */
    private $row = [];

    /**
     * @since 18-06-24
     * @return \GIndie\ScriptGenerator\Bootstrap3\Grid
     */
    public function addRow()
    {
        $this->addRowGP();
        return $this;
    }

    /**
     * @since 18-06-24
     * @return \GIndie\ScriptGenerator\Bootstrap3\Grid\Row
     */
    public function addRowGP()
    {
        $rtnElement = parent::addContentGetPointer(new Grid\Row());
        $this->row[] = $rtnElement;
        return $rtnElement;
    }

    /**
     * 
     * @since 18-06-24
     * 
     * @param null|int $index
     * @return \GIndie\ScriptGenerator\Bootstrap3\Grid\Row
     */
    public function getRow($index = null)
    {
        switch (true)
        {
            case empty($this->row):
                \trigger_error("No rows defined in grid", \E_USER_ERROR);
                break;
            case \is_null($index):
                $index = \count($this->row) - 1;
                break;
        }
        return $this->row[$index];
    }

    /**
     * @since 18-06-24
     * @return array
     */
    public function getRows()
    {
        return $this->row;
    }

}
