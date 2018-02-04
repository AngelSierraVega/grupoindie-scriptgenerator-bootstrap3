<?php

/*
 * Copyright (C) 2016 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\ScriptGenerator\Bootstrap3\Component;

//require_once __DIR__ . '/Modal/Content.php';

use GIndie\ScriptGenerator\HTML5 as HTML5;

/**
 * 
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @since 2017-01-18
 * @version beta.00.02
 */
class Modal extends HTML5\Category\StylesSemantics\Div
{

    /**
     * @since       2017-02-08
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     * @version     beta.00.02
     * 
     * @var         type $_modalDialog
     */
    private $_modalDialog;

    /**
     * @since       2017-02-08
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     * @version     beta.00.02
     * 
     * @var         type $_modalContent
     */
    private $_modalContent;

    /**
     * 
     * @since       2017-02-08
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     * @version     beta.00.02
     * 
     * @param       bool $fade
     * @param       type $tabindex
     * @param       type $role
     * 
     * @ut_str "<div tabindex="-1" role="dialog" class="modal fade"><div role="document" class="modal-dialog"><div class="modal-content"></div></div></div>"
     * 
     */
    public function __construct($fade = true, $tabindex = "-1", $role = "dialog")
    {
        parent::__construct(null, ["tabindex" => $tabindex, "role" => $role]);
        $this->addClass("modal");
        if ($fade) {
            $this->addClass("fade");
        }
        $this->_modalDialog = $this->addContentGetPointer(new HTML5\Category\StylesSemantics\Div([], ["role" => "document"]));
        $this->_modalDialog->addClass("modal-dialog");

        $this->_modalContent = $this->_modalDialog->addContentGetPointer(new HTML5\Category\StylesSemantics\Div());
        $this->_modalContent->addClass("modal-content");
    }

}
