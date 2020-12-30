<?php

/**
 * GI-SG3-Bootstrap3-DVLP - Jumbotron
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (c) 2019 Angel Sierra Vega. Grupo INDIE.
 * @license file://LICENSE
 *
 * @package GIndie\ScriptGenerator\Bootstrap3
 *
 * @since 19-02-02
 * @version 00.C0
 */

namespace GIndie\ScriptGenerator\Bootstrap3\Instance;

/**
 * A lightweight, flexible component that can optionally extend the entire viewport to showcase key 
 * content on your site.
 *
 */
class Jumbotron extends \GIndie\ScriptGenerator\HTML5\Category\StylesSemantics\Div
{

    /**
     * 
     * @param mixed $content The content of the jumbotron
     * @since 19-02-02
     */
    public function __construct($content = null)
    {
        parent::__construct($content, ["class" => "jumbotron"]);
    }

}
