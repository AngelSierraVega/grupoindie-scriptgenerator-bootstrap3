<?php

/**
 * GI-SG3-BTSTRP3 - InputGroup
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (c) 2020 Angel Sierra Vega. Grupo INDIE.
 * @license LICENCE MIT License
 *
 * @package GIndie\ScriptGenerator\Bootstrap3
 *
 * @since 20-03-05
 * @version 00.B0
 */

namespace GIndie\ScriptGenerator\Bootstrap3\FormInput;

use \GIndie\ScriptGenerator\HTML5;

/**
 * Description of InputGroup
 *
 * @author angel
 */
class InputGroup extends HTML5\Category\StylesSemantics\Div
{

    /**
     * @since SG-BTSP3.00.01
     * @param string $label
     * @param mixed $input
     * @edit 19-01-30
     * - Added style cursor:pointer; to label
     * @edit 19-04-04
     */
    public function __construct($input, $tableName)
    {
        parent::__construct(null, ["class" => "input-group"]);
        if (!is_subclass_of($input, HTML5\Category\FormElement\Input::class, false)) {
//            \trigger_error("Variable input debe ser de tipo " . HTML5\Category\FormElement\Input::class,
//                \E_USER_ERROR);
            $input->setAttribute("class", "form-control");
        }
        //$this->label = $this->addContentGetPointer(HTML5\Category\FormInput::label($label));
        //$this->label->setAttribute("style", "cursor:pointer;");
        $this->input = $this->addContentGetPointer($input);
        $this->input->setId($tableName. $input->getId());
        $this->input->setName($tableName);
        $button = new \GIndie\ScriptGenerator\Bootstrap3\Component\Button("Agregar");
        $buttonId = "button" . $input->getId();
        $button->setId($buttonId);
        $button->setAttribute("onClick", "AgregarElemento(this.id)"); //onClick="AgregarElemento(this.id)"
        //$button->addClass("btn btn-default");
        $this->button = $this->addContentGetPointer(new HTML5\Category\StylesSemantics\Span($button, ["class" => "input-group-btn"]));
    }

    /**
     * @since 20-03-05
     * @var \GIndie\ScriptGenerator\HTML5\Category\FormInput\Input
     */
    private $input;

    /**
     * @since 20-03-05
     * @return \GIndie\ScriptGenerator\HTML5\Category\FormInput\Input
     */
    public function getInput()
    {
        return $this->input;
    }

    /**
     * @since 20-03-05
     * @var \GIndie\ScriptGenerator\HTML5\Category\FormInput\Label 
     */
    private $label;

    /**
     * @since 20-03-05
     * @return \GIndie\ScriptGenerator\HTML5\Category\FormInput\Label
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @since 20-03-05
     * @var \GIndie\ScriptGenerator\HTML5\Category\FormInput\Label 
     */
    private $button;

    /**
     * @since 20-03-05
     * @return \GIndie\ScriptGenerator\HTML5\Category\FormInput\Label
     */
    public function getButton()
    {
        return $this->button;
    }

}
