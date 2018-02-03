<?php

/**
 * SG3-Bootstrap3 - FormInput
 *
 */

namespace GIndie\ScriptGenerator\Bootstrap3;

use \GIndie\ScriptGenerator\HTML5\Category\FormInput as HTML5FormInput;

/**
 * Description of FormInput
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (c) 2018 Angel Sierra Vega. Grupo INDIE.
 *
 * @package ScriptGenerator
 * @subpackage Bootstrap3
 *
 * @version SG-BTSP3.00.00 18-02-03 Empty class created.
 * @edit SG-BTSP3.00.01
 * - Extend from HTML5FormInput
 * - Created form-control inputs
 */
class FormInput extends HTML5FormInput
{

    /**
     * @edit SG-BTSP3.00.01 
     * @return \GIndie\ScriptGenerator\HTML5\Category\FormInput\Input\Date
     */
    public static function inputDate()
    {
        return parent::inputDate()->addClass("form-control");
    }

    /**
     * @edit SG-BTSP3.00.01 
     * @return \GIndie\ScriptGenerator\HTML5\Category\FormInput\Input\Text
     */
    public static function inputText()
    {
        return parent::inputText()->addClass("form-control");
    }

    /**
     * @edit SG-BTSP3.00.01 
     * @return \GIndie\ScriptGenerator\HTML5\Category\FormInput\Input\Email
     */
    public static function inputEmail()
    {
        return parent::inputEmail()->addClass("form-control");
    }

    /**
     * @edit SG-BTSP3.00.01 
     * @return \GIndie\ScriptGenerator\HTML5\Category\FormInput\Input\Password
     */
    public static function inputPassword()
    {
        return parent::inputPassword()->addClass("form-control");
    }

    /**
     * @edit SG-BTSP3.00.01 
     * @return \GIndie\ScriptGenerator\HTML5\Category\FormInput\Input\Month
     */
    public static function inputMonth()
    {
        return parent::inputMonth()->addClass("form-control");
    }

    /**
     * @edit SG-BTSP3.00.01 
     * @return \GIndie\ScriptGenerator\HTML5\Category\FormInput\Input\Search
     */
    public static function inputSearch()
    {
        return parent::inputSearch()->addClass("form-control");
    }

    /**
     * @edit SG-BTSP3.00.01 
     * @return \GIndie\ScriptGenerator\HTML5\Category\FormInput\Input\Tel
     */
    public static function inputTel()
    {
        return parent::inputTel()->addClass("form-control");
    }

    /**
     * @edit SG-BTSP3.00.01 
     * @return \GIndie\ScriptGenerator\HTML5\Category\FormInput\Input\Number
     */
    public static function inputNumber()
    {
        return parent::inputNumber()->addClass("form-control");
    }

    /**
     * @edit SG-BTSP3.00.01 
     * @return \GIndie\ScriptGenerator\HTML5\Category\FormInput\Input\URL
     */
    public static function inputURL()
    {
        return parent::inputURL()->addClass("form-control");
    }

}
