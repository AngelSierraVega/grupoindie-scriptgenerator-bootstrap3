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
     * @param mixed $input
     * @return \GIndie\ScriptGenerator\Bootstrap3\FormInput\FormGroup
     * @edit 19-04-04
     */
    public static function instance($label, $input)
    {

        return new \GIndie\ScriptGenerator\Bootstrap3\FormInput\FormGroup($label, $input);
    }

    /**
     * @since SG-BTSP3.00.01
     * @param string $label
     * @param mixed $input
     * @edit 19-01-30
     * - Added style cursor:pointer; to label
     * @edit 19-04-04
     */
    public function __construct($label, $input)
    {
        parent::__construct(null, ["class" => "form-group"]);
        if (!is_subclass_of($input, HTML5\Category\FormElement\Input::class, false)) {
            \trigger_error("Variable input debe ser de tipo " . HTML5\Category\FormElement\Input::class,
                \E_USER_ERROR);
        }
        $this->label = $this->addContentGetPointer(HTML5\Category\FormInput::label($label));
        $this->label->setAttribute("style", "cursor:pointer;");
        $this->input = $this->addContentGetPointer($input);
        if (!\is_null($this->input->getId())) {
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
