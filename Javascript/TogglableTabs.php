<?php
/**
 * Add quick, dynamic tab functionality to transition through panes of local content, even via dropdown menus.
 * 
 * @link <https://getbootstrap.com/docs/3.3/javascript/#tabs>
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (c) 2019 Angel Sierra Vega. Grupo INDIE.
 * @license LICENCE MIT License
 *
 * @package GIndie\ScriptGenerator\Bootstrap3
 *
 * @since 19-09-24
 * @version 00.C0
 */

namespace GIndie\ScriptGenerator\Bootstrap3\Javascript;

use GIndie\ScriptGenerator\HTML5\Category\StylesSemantics;

/**
 * Description of TogglableTabs
 *
 * @edit 19-09-24
 */
class TogglableTabs extends StylesSemantics\Div
{

    /**
     *
     * @var \GIndie\ScriptGenerator\HTML5\Category\Lists\Unordered 
     * @since 19-09-24
     */
    private $tabNavigation;

    /**
     *
     * @var \GIndie\ScriptGenerator\HTML5\Category\StylesSemantics\Div 
     * @since 19-09-24
     */
    private $tabContent;

    /**
     * @since 19-09-24
     */
    public function __construct($id)
    {
        parent::__construct(null, ["id"=>$id]);
        $this->tabNavigation = new \GIndie\ScriptGenerator\HTML5\Category\Lists\Unordered();
        $this->tabNavigation->addClass("nav nav-tabs");
        $this->tabNavigation->setAttribute("role", "tablist");
        $this->tabContent = new StylesSemantics\Div(null, ["class" => "tab-content"]);
        $this->addContent($this->tabNavigation);
        $this->addContent($this->tabContent);
    }

    /**
     * 
     * @since 19-09-24
     * @param type $tabId
     * @param type $tab
     * @return $this
     */
    public function addTab($tabId, $tab)
    {
        //<li role="presentation">
        $listElement = new \GIndie\ScriptGenerator\HTML5\Category\Lists\ListItem();
        $listElement->setAttribute("role", "presentation");
        //<a href="#[ID]" aria-controls="[ID]" role="tab" data-toggle="tab">
        $anchor = new \GIndie\ScriptGenerator\HTML5\Category\Links\Anchor();
        $anchor->setAttributes(["href" => "#{$tabId}", "aria-controls" => $tabId, "role" => "tab", "data-toggle" => "tab"]);
        $anchor->addContent($tab);
        $listElement->addContent($anchor);
        $this->tabNavigation->addListElement($listElement);
        return $this;
    }

    /**
     * 
     * @since 19-09-24
     * @param type $tabId
     * @param type $content
     * @return $this
     */
    public function addTabContent($tabId, $content)
    {
        $this->tabContent->addContent(new StylesSemantics\Div($content, ["role" => "tabpanel", "class" => "tab-pane", "id" => $tabId]));
        return $this;
    }

    /**
     * @since 19-09-24
     */
    public function defineScript()
    {
        \ob_start();

        ?>
        <script>
            $('#<?php echo $this->getId(); ?> a').click(function (e) {
                e.preventDefault()
                $(this).tab('show')
            })
        </script>
        <?php
        $out = \ob_get_contents();
        \ob_end_clean();
        return $out;
    }

}
