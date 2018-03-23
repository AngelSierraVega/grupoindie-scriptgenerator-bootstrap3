<?php

/**
 * SG3-Bootstrap3 - test
 */

namespace GIndie\ScriptGenerator\Bootstrap3\Component;

use GIndie\ScriptGenerator\DML\Node;
use GIndie\ScriptGenerator\HTML5\Category\StylesSemantics\Div;
use GIndie\ScriptGenerator\Bootstrap3\ContextualColors;

/**
 * Description of Panel
 * 
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (c) 2018 Angel Sierra Vega. Grupo INDIE.
 *
 * @package ScriptGenerator
 * @subpackage Bootstrap3
 * 
 * @version GIG.BTS3.00 2017-04-23
 *
 * @edit SG-BTSP3.00.01 18-02-02
 * - Updated varnames due to PSR-1 violation
 * - Added tests from PanelTest
 * - Deleted PanelTest
 * - Added get methods for private vars.
 */
class Panel extends Div
{

    /**
     * 
     */
    use ContextualColors;

    /**
     * 
     * @version GIG.BTS3.00.01
     * @var GIgenerator\DML\HTML5\Node $heading
     * @edit SG-BTSP3.00.01
     */
    private $heading;

    /**
     * 
     * @version GIG.BTS3.00.01
     * @var GIgenerator\DML\HTML5\Node $body
     * @edit SG-BTSP3.00.01
     */
    private $body;

    /**
     * 
     * @version GIG.BTS3.00.01
     * @var GIgenerator\DML\HTML5\Node $footer
     * @edit SG-BTSP3.00.01
     */
    private $footer;

    /**
     * @todo Método agregar/definir contenido
     * @var GIndie\Generator\DML\Node Placeholder for the content between heading and body.
     * @edit SG-BTSP3.00.01
     */
    private $headingBody;

    /**
     * @todo Método agregar/definir contenido
     * @var GIndie\Generator\DML\Node Placeholder for the content between body and footer.
     * @edit SG-BTSP3.00.01
     */
    private $bodyFooter;

    /**
     * 
     * @param type $heading
     * @param type $headingBody
     * @param type $body
     * @param type $bodyFooter
     * @param type $footer
     * @edit SG-BTSP3.00.01
     * 
     * @ut_str construct01 "<div class="panel panel-default"></div>"
     * 
     * @utp_params construct02 "TITLE"
     * @ut_str construct02 "<div class="panel panel-default"><div class="panel-heading"><h3 class="panel-title">TITLE</h3></div></div>"
     * 
     * @utp_params construct03 "TITLE" "<span></span>"
     * @ut_str construct03 "<div class="panel panel-default"><div class="panel-heading"><h3 class="panel-title">TITLE</h3></div><span></span></div>"
     * 
     * @utp_params construct04 "TITLE" "<span></span>" "This is the content"
     * @ut_str construct04 "<div class="panel panel-default"><div class="panel-heading"><h3 class="panel-title">TITLE</h3></div><span></span><div class="panel-body">This is the content</div></div>"
     * 
     * @utp_params construct05 "TITLE" "<span></span>" "This is the content" "<span></span>"
     * @ut_str construct05 "<div class="panel panel-default"><div class="panel-heading"><h3 class="panel-title">TITLE</h3></div><span></span><div class="panel-body">This is the content</div><span></span></div>"
     * 
     * @utp_params construct06 "TITLE" "<span></span>" "This is the content" "<span></span>" "Footer"
     * @ut_str construct06 "<div class="panel panel-default"><div class="panel-heading"><h3 class="panel-title">TITLE</h3></div><span></span><div class="panel-body">This is the content</div><span></span><div class="panel-footer">Footer</div></div>"
     */
    public function __construct($heading = false, $headingBody = false, $body = false, $bodyFooter = false,
                                $footer = false)
    {
        parent::__construct("", ["class" => "panel panel-default"]);
        $this->baseClass = "panel";
        //$this->addClass($this->baseClass);
        //$this->addClass($classnames);
        //$this->setContext(static::$COLOR_DEFAULT, \FALSE);
        $heading === false ?: $this->setHeading($heading);
        $headingBody === false ?: $this->setHeadingBody($headingBody);
        $body === false ?: $this->setBody($body);
        $bodyFooter === false ?: $this->setBodyFooter($bodyFooter);
        $footer === false ?: $this->setFooter($footer);
    }

    /**
     * 
     * @param type $heading
     * @return $this
     * @edit SG-BTSP3.00.01
     */
    public function setHeading($heading)
    {
        unset($this->heading);
        if (\is_bool($heading)) {
            $heading !== \TRUE ?: $this->heading = $this->addContentGetPointer(new Panel\Heading());
        } else {
            if (\is_a($heading, Panel\Heading::class)) {
                $this->heading = $this->addContentGetPointer($heading);
            } else {
                $this->heading = $this->addContentGetPointer(new Panel\Heading($heading));
            }
        }
        return $this;
    }

    /**
     * @since SG-BTSP3.00.01
     * @return \GIndie\ScriptGenerator\Bootstrap3\Component\Panel\Heading
     */
    public function getHeading()
    {
        return $this->heading;
    }

    /**
     * 
     * @param type $headingBody
     * @return $this
     * @edit SG-BTSP3.00.01
     */
    public function setHeadingBody($headingBody)
    {
        unset($this->headingBody);
        switch (true)
        {
            case (true === $headingBody):
                $this->headingBody = $this->addContentGetPointer(Node::contentOnly([]));
                break;
            case (false === $headingBody):
                break;
            default:
                $this->headingBody = $this->addContentGetPointer(Node::contentOnly($headingBody));
                break;
        }
        return $this;
    }

    /**
     * @since SG-BTSP3.00.01
     * @return \GIndie\ScriptGenerator\DML\Node
     */
    public function getHeadingBody()
    {
        return $this->headingBody;
    }

    /**
     * 
     * @param type $body
     * @return $this
     * @edit SG-BTSP3.00.01
     */
    public function setBody($body)
    {
        unset($this->body);
        switch (\TRUE)
        {
            case (\TRUE === $body):
                $this->body = $this->addContentGetPointer(new Panel\Body());
                break;
            case (\FALSE == $body):
                break;
            default:
                if (\is_subclass_of($body, __NAMESPACE__ . "Panel\Body")) {
                    $this->body = $this->addContentGetPointer($body);
                } else {
                    $this->body = $this->addContentGetPointer(new Panel\Body($body));
                }
                break;
        }
        return $this;
    }

    /**
     * @since SG-BTSP3.00.01
     * @return \GIndie\ScriptGenerator\Bootstrap3\Component\Panel\Body
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * 
     * @param type $bodyFooter
     * @return $this
     * @edit SG-BTSP3.00.01
     */
    public function setBodyFooter($bodyFooter)
    {
        unset($this->bodyFooter);
        switch (\TRUE)
        {
            case (\TRUE === $bodyFooter):
                $this->bodyFooter = $this->addContentGetPointer(Node::ContentOnly([]));
                break;
            case (\FALSE === $bodyFooter):
                break;
            default:
                if (\is_array($bodyFooter)) {
                    $this->bodyFooter = $this->addContentGetPointer(Node::contentOnly($bodyFooter));
                } else {
                    $this->bodyFooter = $this->addContentGetPointer(Node::contentOnly([$bodyFooter]));
                }
                break;
        }
        return $this;
    }

    /**
     * @since SG-BTSP3.00.01
     * @return \GIndie\ScriptGenerator\DML\Node
     */
    public function getBodyFooter()
    {
        return $this->bodyFooter;
    }

    /**
     * 
     * @param type $footer
     * @return $this
     * @edit SG-BTSP3.00.01
     */
    public function setFooter($footer)
    {
        unset($this->footer);
        switch (\TRUE)
        {
            case (\TRUE === $footer):
                $this->footer = $this->addContentGetPointer(new Panel\Footer());
                break;
            case (\FALSE === $footer):
                break;
            default:
                if (\is_subclass_of($footer, __NAMESPACE__ . "Panel\Footer")) {
                    $this->footer = $this->addContentGetPointer($footer);
                } else {
                    $this->footer = $this->addContentGetPointer(new Panel\Footer($footer));
                }
                break;
        }
        return $this;
    }

    /**
     * @since SG-BTSP3.00.01
     * @return \GIndie\ScriptGenerator\Bootstrap3\Component\Panel\Footer
     */
    public function getFooter()
    {
        return $this->footer;
    }

}
