<?php

namespace GIndie\ScriptGenerator\Bootstrap3\Tables;

/**
 * DVLP-SG3-Bootstrap3 - Table
 * 
 * @link <https://www.w3schools.com/bootstrap/bootstrap_ref_css_tables.asp>
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (c) 2018 Angel Sierra Vega. Grupo INDIE.
 *
 * @package ScriptGenerator
 * @subpackage Bootstrap3
 *
 * @version 00.B0
 * @since 18-02-24
 * @edit SG-BTSP3.00.01 18-03-09
 * - Class extends \GIndie\ScriptGenerator\HTML5\Tables\Table
 * - Created __construct()
 */
class Table extends \GIndie\ScriptGenerator\HTML5\Tables\Table
{

    /**
     * @since SG-BTSP3.00.01
     */
    public function __construct()
    {
        parent::__construct();
        $this->addClass("table");
    }

}
