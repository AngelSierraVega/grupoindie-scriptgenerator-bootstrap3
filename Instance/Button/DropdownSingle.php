<?php

/**
 * GI-SG3-Bootstrap3-DVLP - DropdownSingle
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (c) 2019 Angel Sierra Vega. Grupo INDIE.
 * @license file://LICENSE
 *
 * @package GIndie\ScriptGenerator\Bootstrap3
 *
 * @since 19-01-15
 * @version 00.C0
 */

namespace GIndie\ScriptGenerator\Bootstrap3\Instance\Button;

use GIndie\ScriptGenerator\Bootstrap3\Component;
use GIndie\ScriptGenerator\HTML5\Category\Lists;

/**
 * Use any button to trigger a dropdown menu by placing it within a .btn-group and providing the 
 * proper menu markup.
 * 
 * @link <https://getbootstrap.com/docs/3.3/components/#btn-dropdowns>
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 */
class DropdownSingle extends Group
{

    /**
     *
     * @var \GIndie\ScriptGenerator\Bootstrap3\Component\Button 
     * @since 19-01-15
     */
    public $button;

    /**
     *
     * @var \GIndie\ScriptGenerator\HTML5\Category\Lists\Unordered
     * @since 19-01-15
     */
    public $dropdownMenu;

    /**
     * 
     * @param mixed $label
     * @param array|mixed $elements
     * @since 19-01-15
     */
    public function __construct($label, array $elements)
    {
        parent::__construct(null);
        $this->button = $this->addContentGetPointer(new Component\Button($label));
        $this->button->addClass("dropdown");
        $this->button->addClass("dropdown-toggle");

        $this->button->setAttribute("data-toggle", "dropdown");
        $this->button->setAttribute("aria-haspopup", "true");
        $this->button->setAttribute("aria-expanded", "false");

        $this->dropdownMenu = $this->addContentGetPointer(Lists::unordered($elements));
        $this->dropdownMenu->addClass("dropdown-menu");
        $this->dropdownMenu->setAttribute("role", "menu");
    }

}
