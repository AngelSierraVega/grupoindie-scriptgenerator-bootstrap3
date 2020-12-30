<?php

namespace GIndie\ScriptGenerator\Bootstrap3\Component\Navbar;

use GIndie\ScriptGenerator\HTML5\Category\StylesSemantics;
use GIndie\ScriptGenerator\HTML5\Category\Links;
use GIndie\ScriptGenerator\HTML5\Category\Images;

/**
 * DVLP-SG3-Bootstrap3 - Header
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (CC) 2020 Angel Sierra Vega. Grupo INDIE.
 * @license file://LICENSE
 *
 * @package ScriptGenerator
 * @subpackage Bootstrap3
 *
 * @version 00.B3
 * @since 18-02-20
 * @edit SG-BTSP3.00.01
 * - Class extends \GIndie\ScriptGenerator\HTML5\Category\StylesSemantics\Div
 * - Created __construct(), $brand, getBrand(), setBrand()
 * @edit SG-BTSP3.00.02 18-02-23
 * - Created brandImage()
 * @edit SG-BTSP3.00.03 18-02-26
 * - Created tmpCollapseButton()
 */
class Header extends \GIndie\ScriptGenerator\HTML5\Category\StylesSemantics\Div
{

    /**
     * 
     * @return string
     * @since SG-BTSP3.00.03
     */
    private static function tmpCollapseButton()
    {
        \ob_start();
        ?>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#default-component-navbar-collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <?php
        $out = \ob_get_contents();
        \ob_end_clean();
        return $out;
    }

    /**
     * 
     * @param string $urlImage
     * @param string $brandName
     * @param string $href
     * 
     * @return \GIndie\ScriptGenerator\HTML5\Category\Links\Hyperlink
     * @since SG-BTSP3.00.02
     * @edit 19-02-02
     * - Heigh attribute set to 20
     */
    public static function brandImage($urlImage, $brandName, $href = "#")
    {
        return Links::hyperlink($href)->addContent(Images::img($urlImage, $brandName)->setAttribute("height", "20"))->addClass("navbar-brand");
    }

    /**
     * 
     * @param type $content
     * 
     * @since SG-BTSP3.00.01
     * @edit SG-BTSP3.00.03
     * - Use tmpCollapseButton()
     */
    public function __construct($brand = null)
    {
        parent::__construct(null, ["class" => "navbar-header"]);
        $this->addContent(static::tmpCollapseButton());
        if ($brand !== null) {
            $this->setBrand($brand);
        }
    }

    /**
     * 
     * @return mixed|boolean
     * 
     * @since SG-BTSP3.00.01
     */
    public function getBrand()
    {
        return isset($this->brand) ? $this->brand : false;
    }

    /**
     * 
     * @param mixed $brand
     * 
     * @return $this
     * 
     * @since SG-BTSP3.00.01
     */
    public function setBrand($brand)
    {
        switch (true)
        {
            case isset($this->brand):
                $this->brand = $this->handleBrand($brand);
                break;
            default:
                $this->brand = $this->addContentGetPointer($this->handleBrand($brand));
                break;
        }
        return $this;
    }

    /**
     * 
     * @param type $brand
     * @since SG-BTSP3.00.01
     * @return type
     * 
     * @since SG-BTSP3.00.01
     */
    private function handleBrand($brand)
    {
        switch (true)
        {
            case \is_string($brand):
                return StylesSemantics::div($brand, ["class" => "navbar-brand"]);
            default:
                return $brand;
        }
    }

    /**
     *
     * @var mixed 
     * 
     * @since SG-BTSP3.00.01
     */
    private $brand;

}
