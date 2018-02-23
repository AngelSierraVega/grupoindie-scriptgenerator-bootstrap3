<?php

namespace GIndie\ScriptGenerator\Bootstrap3\Component;

use GIndie\ScriptGenerator\Bootstrap3;
use GIndie\ScriptGenerator\HTML5\Category\StylesSemantics;

/**
 * DVLP-SG3-Bootstrap3 - Navbar
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (c) 2018 Angel Sierra Vega. Grupo INDIE.
 *
 * @package ScriptGenerator
 * @subpackage Bootstrap3
 *
 * @version SG-BTSP3.00.00 18-02-20 Empty class created.
 * @edit SG-BTSP3.00.01
 * - Class extends \GIndie\ScriptGenerator\HTML5\Node
 * - Created uses, __construct(), addContent(), $container
 */
class Navbar extends \GIndie\ScriptGenerator\HTML5\Node
{
    

    /**
     * 
     * @since SG-BTSP3.00.01
     */
    use \GIndie\ScriptGenerator\HTML5\Attribute\GlobalAttributes;
    use Bootstrap3\ContextualColors;
    use Bootstrap3\BootstrapClass;

    /**
     * 
     * @since SG-BTSP3.00.01
     */
    public function __construct($brand = null)
    {
        parent::__construct(static::TYPE_DEFAULT, "nav");
        $this->baseClass = "navbar";
        $this->addClass($this->baseClass);
        $this->setContext(static::$COLOR_DEFAULT, false);
        $this->container = $this->addContentGetPointer(StylesSemantics::div(null, ["class" => "container-fluid"]));
        switch (true)
        {
            case ($brand == null):
                break;
            case \is_bool($brand):
                $this->setHeader(null);
                break;
            default:
                $this->setHeader($brand);
                break;
        }
    }

    /**
     * 
     * @param mixed $content
     * @return $this
     * 
     * @since SG-BTSP3.00.01
     */
    public function addContent($content)
    {
        $this->container->addContent($content);
        return $this;
    }

    /**
     * 
     * @return \GIndie\ScriptGenerator\Bootstrap3\Component\Navbar\Header|boolean
     * 
     * @since SG-BTSP3.00.01
     */
    public function getHeader()
    {
        return isset($this->header) ? $this->header : false;
    }

    /**
     * 
     * @param mixed|null $brand
     * 
     * @return $this
     * 
     * @since SG-BTSP3.00.01
     */
    public function setHeader($brand = null)
    {
        $this->header = $this->container->addContentGetPointer(new Navbar\Header($brand));
        return $this;
    }

    /**
     *
     * @var \GIndie\ScriptGenerator\HTML5\Category\StylesSemantics\Div 
     * 
     * @since SG-BTSP3.00.01
     */
    private $container;

    /**
     *
     * @var \GIndie\ScriptGenerator\Bootstrap3\Component\Navbar\Header
     * 
     * @since SG-BTSP3.00.01
     */
    private $header;

}
