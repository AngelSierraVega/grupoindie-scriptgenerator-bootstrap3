<?php

/**
 * GI-SG3-BTSTRP3 - PageHeader
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (c) 2021 Angel Sierra Vega. Grupo INDIE.
 * @license file://LICENSE
 *
 * @package GIndie\ScriptGenerator\Bootstrap3\Component
 *
 * @since 21-06-27
 * @version 00.B0
 */

namespace GIndie\ScriptGenerator\Bootstrap3\Component;

/**
 * A simple shell for an h1 to appropriately space out and segment sections of 
 * content on a page. It can utilize the h1's default small element, as well as 
 * most other components (with additional styles).
 *
 * @author Angel
 */
class PageHeader extends \GIndie\ScriptGenerator\HTML5\Category\StylesSemantics\Div {

    /**
     * A simple shell for an h1 to appropriately space out and segment sections of 
     * content on a page. It can utilize the h1's default small element, as well as 
     * most other components (with additional styles).
     * 
     * @param string $title
     * @param string $subtitle
     * @since 21-06-27
     */
    public function __construct($title, $subtitle) {
        parent::__construct(null, ["class" => "page-header"]);
        $this->addContent(\GIndie\ScriptGenerator\HTML5\Category\Basic::header(1, $title . "<small>" . $subtitle . "</small>"));
    }

}
