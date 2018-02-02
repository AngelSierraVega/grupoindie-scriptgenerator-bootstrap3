<?php
/*
 * Copyright (C) 2016 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\Generator\DML\HTML5\Bootstrap3\Component;

//require_once __DIR__ . '/Modal/Content.php';

use GIndie\Generator\DML\HTML5 as HTML5;

/**
 * 
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @since 2017-01-18
 * @version beta.00.02
 */
class Modal extends HTML5\Category\StylesSemantics\Div {

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
     */
    public function __construct($fade = true, $tabindex = "-1", $role = "dialog") {
        //parent::__construct("div", false, );
        parent::__construct([], ["tabindex" => $tabindex, "role" => $role]);
        //$this->addClass("container");
        $this->addClass("modal");
        if ($fade) {
            $this->addClass("fade");
        }
        $this->_modalDialog = $this->addContent(new HTML5\Node("div", false,
                ["role" => "document"]));
        $this->_modalDialog->addClass("modal-dialog");

        $this->_modalContent = $this->_modalDialog->addContent(new HTML5\Node("div"));
        $this->_modalDialog->addClass("modal-content");
    }

    public function __toStringDEPRECATED() {
        ob_start();
        ?>
        <div id="gip-modal" data-keyboard="true" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <?php
        $strRtn = ob_get_contents();
        ob_end_clean();
        return $strRtn;
    }

}