<?php

/**
 * GI-SG3-Bootstrap3-DVLP - Glyphicon
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (c) 2019 Angel Sierra Vega. Grupo INDIE.
 * @license file://LICENSE
 *
 * @package GIndie\ScriptGenerator\Bootstrap3
 *
 * @since 19-02-04
 * @version 00.B4
 */

namespace GIndie\ScriptGenerator\Bootstrap3\Instance;

use GIndie\ScriptGenerator\HTML5\Category\StylesSemantics;
use GIndie\ScriptGenerator\Bootstrap3\DataDefinition;

/**
 * Description of Glyphicon
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 */
class Glyphicon extends StylesSemantics\Span implements DataDefinition\Glyphicons
{

    /**
     *
     * @var string
     * @since 19-02-04 
     */
    private $baseClass = "glyphicon";

    /**
     * 
     * @param string $icon
     * @param array $attributes
     * @since 19-02-04
     */
    public function __construct($icon, $attributes = [])
    {
        parent::__construct(null, $attributes);
        $this->addClass($this->baseClass . " " . $this->baseClass . "-" . $icon);
    }

}
