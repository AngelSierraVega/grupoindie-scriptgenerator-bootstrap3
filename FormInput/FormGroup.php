<?php

/**
 * SG3-Bootstrap3 - FormGroup
 */

namespace GIndie\ScriptGenerator\Bootstrap3\FormInput;

use \GIndie\ScriptGenerator\HTML5;

/**
 * Description of FormGroup
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (c) 2018 Angel Sierra Vega. Grupo INDIE.
 *
 * @package ScriptGenerator
 * @subpackage Bootstrap3
 *
 * @version 00.B3
 * @since 18-02-03
 * @edit SG-BTSP3.00.01
 * - Extend from Div
 * - Created instance(), __construct(), getInput(), getLabel(), $input, $label
 */
class FormGroup extends HTML5\Category\StylesSemantics\Div
{

    /**
     * @since SG-BTSP3.00.01
     * @param string $label
     * @param \GIndie\ScriptGenerator\HTML5\Category\FormInput\Input $input
     * @return \GIndie\ScriptGenerator\Bootstrap3\FormInput\FormGroup
     */
    public static function instance($label, HTML5\Category\FormInput\Input $input)
    {
        return new \GIndie\ScriptGenerator\Bootstrap3\FormInput\FormGroup($label, $input);
    }

    /**
     * @since SG-BTSP3.00.01
     * @param string $label
     * @param \GIndie\ScriptGenerator\HTML5\Category\FormInput\Input $input
     * @edit 19-01-30
     * - Added style cursor:pointer; to label
     */
    public function __construct($label, HTML5\Category\FormInput\Input $input)
    {
        parent::__construct(null, ["class" => "form-group"]);
        $this->label = $this->addContentGetPointer(HTML5\Category\FormInput::label($label));
        $this->label->setAttribute("style", "cursor:pointer;");
        $this->input = $this->addContentGetPointer($input);
        if(!\is_null($this->input->getId())){
            $this->label->setAttribute("for", $this->input->getId());
        }
    }

    /**
     * @since SG-BTSP3.00.01
     * @var \GIndie\ScriptGenerator\HTML5\Category\FormInput\Input
     */
    private $input;

    /**
     * @since SG-BTSP3.00.01
     * @return \GIndie\ScriptGenerator\HTML5\Category\FormInput\Input
     */
    public function getInput()
    {
        return $this->input;
    }

    /**
     * @since SG-BTSP3.00.01
     * @var \GIndie\ScriptGenerator\HTML5\Category\FormInput\Label 
     */
    private $label;

    /**
     * @since SG-BTSP3.00.01
     * @return \GIndie\ScriptGenerator\HTML5\Category\FormInput\Label
     */
    public function getLabel()
    {
        return $this->label;
    }

}
