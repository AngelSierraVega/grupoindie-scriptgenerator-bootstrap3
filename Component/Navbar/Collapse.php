<?php

namespace GIndie\ScriptGenerator\Bootstrap3\Component\Navbar;

/**
 * DVLP-SG3-Bootstrap3 - Collapse
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (CC) 2020 Angel Sierra Vega. Grupo INDIE.
 * @license file://LICENSE
 *
 * @package ScriptGenerator
 * @subpackage Bootstrap3
 * @since 18-02-25
 * 
 *
 * @version 00.B0
 * @edit SG-BTSP3.00.01
 * - Class extends \GIndie\ScriptGenerator\HTML5\Category\StylesSemantics\Div
 * - Created __construct()
 */
class Collapse extends \GIndie\ScriptGenerator\HTML5\Category\StylesSemantics\Div
{

    /**
     * 
     * @param string $id
     * @since SG-BTSP3.00.01
     */
    public function __construct($id)
    {
        parent::__construct(null, []);
        //parent::__construct(null, ["class" => "collapse navbar-collapse", "id" => $id]);
    }

}
