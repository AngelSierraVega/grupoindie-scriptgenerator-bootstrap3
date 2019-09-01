<?php

namespace GIndie\ScriptGenerator\Bootstrap3\Component;

use GIndie\ScriptGenerator\Bootstrap3;
use GIndie\ScriptGenerator\HTML5\Category\StylesSemantics;

/**
 * DVLP-SG3-Bootstrap3 - Navbar
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (c) 2018 Angel Sierra Vega. Grupo INDIE.
 * @license file://LICENSE MIT License
 *
 * @package ScriptGenerator
 * @subpackage Bootstrap3
 *
 * @since 18-02-20
 * @version 00.B0
 * 
 * @edit SG-BTSP3.00.01
 * - Class extends \GIndie\ScriptGenerator\HTML5\Node
 * - Created uses, __construct(), addContent(), $container
 * @edit SG-BTSP3.00.02 18-02-25
 * - Updated __construct()
 * - Created setNavigation(), $navigation, $collapse
 */
class Navbar extends \GIndie\ScriptGenerator\HTML5\Node
{

    /**
     * @since SG-BTSP3.00.02
     * @var type 
     */
    private $collapse;

    /**
     * 
     * @param type $navigation
     * @param type $navigationIndex
     * 
     * @return \GIndie\ScriptGenerator\Bootstrap3\Component\Navbar
     * 
     * @since SG-BTSP3.00.02
     */
    public function setNavigation($navigation, $navigationIndex = 0)
    {
        switch (true) {
            case \is_a($navigation, \GIndie\ScriptGenerator\HTML5\Category\Lists\Unordered::class,
                    true):
            case \is_subclass_of($navigation,
                    \GIndie\ScriptGenerator\HTML5\Category\Lists\Unordered::class):
                $navigation->addClass("nav navbar-nav");
                break;
            default:
                var_dump($navigation);
                \trigger_error("todo", \E_USER_ERROR);
                break;
        }
        /**
         * @todo 
         * if(\is_null($this->collapse)){
         * $this->collapse = $this->container->addContentGetPointer(new Navbar\Collapse("default-component-navbar-collapse"));
         * }
         */
        $this->navigation[$navigationIndex] = $this->container->addContentGetPointer($navigation);
        return $this;
    }

    /**
     *
     * @var array 
     * @since SG-BTSP3.00.02
     */
    private $navigation = [];

    /**
     * @since SG-BTSP3.00.01
     * @edit 18-??-??
     * - Removed use Bootstrap3\BootstrapClass;
     * @edit 19-04-17
     * - Removed use of GlobalAttributes
     */
    use Bootstrap3\ContextualColors;

    /**
     * @param boolean $containerFluid
     * @since SG-BTSP3.00.01
     * @edit SG-BTSP3.00.02
     * - Removed param $brand and related functionality
     * - Added param $containerFluid and related functionality
     */
    public function __construct($containerFluid = true)
    {
        parent::__construct(static::TYPE_DEFAULT, "nav");
        $this->baseClass = "navbar";
        $this->addClass($this->baseClass);
        $this->setContext(static::$COLOR_DEFAULT, false);
        switch (true) {
            case ($containerFluid === true):
                $this->container = $this->addContentGetPointer(StylesSemantics::div(null,
                                ["class" => "container-fluid"]));
                break;
            default:
                $this->container = $this->addContentGetPointer(StylesSemantics::div(null,
                                ["class" => "container"]));
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
