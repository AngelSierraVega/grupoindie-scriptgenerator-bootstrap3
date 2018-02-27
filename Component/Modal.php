<?php

namespace GIndie\ScriptGenerator\Bootstrap3\Component;

use GIndie\ScriptGenerator\HTML5 as HTML5;

/**
 * 
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @since 2017-01-18
 * @version beta.00.02 2017-02-08
 * @edit SG-BTSP3.00.01 18-02-25
 * - Updated __construct()
 * - Created getModalContent(), getModalDialog()
 */
class Modal extends HTML5\Category\StylesSemantics\Div
{

    /**
     * 
     * @param boolean $fade
     * @param string $tabindex
     * @param string $role
     * 
     * @ut_str "<div tabindex="-1" role="dialog" class="modal fade"><div role="document" class="modal-dialog"><div class="modal-content"></div></div></div>"
     * 
     * @version beta.00.02
     * @edit SG-BTSP3.00.01
     */
    public function __construct($fade = true, $tabindex = "-1", $role = "dialog")
    {
        parent::__construct(null, ["tabindex" => $tabindex, "role" => $role]);
        $this->addClass("modal");
        if ($fade) {
            $this->addClass("fade");
        }
        $this->modalDialog = $this->addContentGetPointer(new HTML5\Category\StylesSemantics\Div([], ["role" => "document"]));
        $this->modalDialog->addClass("modal-dialog");
        $this->modalContent = $this->modalDialog->addContentGetPointer(new Modal\Content("", "", ""));
    }

    /**
     * 
     * @return \GIndie\ScriptGenerator\Bootstrap3\Component\Modal\Content
     * @since SG-BTSP3.00.01
     */
    public function getModalContent()
    {
        return $this->modalContent;
    }

    /**
     * @return \GIndie\ScriptGenerator\HTML5\Category\StylesSemantics\Div
     * @since SG-BTSP3.00.01
     */
    public function getModalDialog()
    {
        return $this->modalDialog;
    }

    /**
     * 
     * @var \GIndie\ScriptGenerator\Bootstrap3\Component\Modal\Content $modalContent
     * 
     * @since 2017-02-08
     * @version beta.00.02
     * @edit SG-BTSP3.00.01
     * - Renamed due to PSR-1 violation
     */
    private $modalContent;

    /**
     * 
     * @var type $modalDialog
     * @since 2017-02-08
     * @version beta.00.02
     * @edit SG-BTSP3.00.01
     * - Renamed due to PSR-1 violation
     */
    private $modalDialog;

}
