<?php

/**
 * GI-SG3-Bootstrap3-DVLP - Group
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (c) 2019 Angel Sierra Vega. Grupo INDIE.
 * @license file://LICENSE MIT License
 *
 * @package GIndie\ScriptGenerator\Bootstrap3
 *
 * @since 19-01-15
 * @version 00.C0
 */

namespace GIndie\ScriptGenerator\Bootstrap3\Instance\Button;

/**
 * Group a series of buttons together on a single line with the button group
 * 
 * Tooltips & popovers in button groups require special setting: When using tooltips or popovers on 
 * elements within a .btn-group, you'll have to specify the option container: 'body' to avoid 
 * unwanted side effects (such as the element growing wider and/or losing its rounded corners when 
 * the tooltip or popover is triggered).
 * 
 * Ensure correct role and provide a label: In order for assistive technologies – such as screen 
 * readers – to convey that a series of buttons is grouped, an appropriate role attribute needs to 
 * be provided. For button groups, this would be role="group", while toolbars should have a 
 * role="toolbar". One exception are groups which only contain a single control (for instance the 
 * justified button groups with <button> elements) or a dropdown. In addition, groups and toolbars 
 * should be given an explicit label, as most assistive technologies will otherwise not announce 
 * them, despite the presence of the correct role attribute. In the examples provided here, we 
 * use aria-label, but alternatives such as aria-labelledby can also be used.
 *
 * @link <https://getbootstrap.com/docs/3.3/components/#btn-groups>
 */
class Group extends \GIndie\ScriptGenerator\HTML5\Category\StylesSemantics\Div
{

    /**
     * 
     * @param mixed $content
     * @since 19-01-15
     */
    public function __construct($content = null)
    {
        parent::__construct($content, ["class" => "btn-group"]);
    }

}
