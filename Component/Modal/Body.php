<?php

/**
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\ScriptGenerator\Bootstrap3\Component\Modal;

use GIndie\ScriptGenerator\HTML5;
use GIndie\ScriptGenerator\Bootstrap3;

/**
 * @license file://LICENSE
 * 
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @since 2017-01-18
 * @version 00.B0
 */
class Body extends HTML5\Node
{

    /**
     * 
     * @param type $content
     * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
     * @since 2017-01-18
     */
    public function __construct($content = null)
    {
        parent::__construct(static::TYPE_DEFAULT, "div", ["class" => "modal-body"]);
        //parent::__construct("div", false, ["class" => "modal-body"]);
        if ($content !== null) {
            $this->addContent($content);
        }
    }

}
