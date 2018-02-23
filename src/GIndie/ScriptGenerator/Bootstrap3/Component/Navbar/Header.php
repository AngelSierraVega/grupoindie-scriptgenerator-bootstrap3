<?php

namespace GIndie\ScriptGenerator\Bootstrap3\Component\Navbar;

use GIndie\ScriptGenerator\HTML5\Category\StylesSemantics;
use GIndie\ScriptGenerator\HTML5\Category\Links;
use GIndie\ScriptGenerator\HTML5\Category\Images;

/**
 * DVLP-SG3-Bootstrap3 - Header
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (c) 2018 Angel Sierra Vega. Grupo INDIE.
 *
 * @package ScriptGenerator
 * @subpackage Bootstrap3
 *
 * @version SG-BTSP3.00.00 18-02-20 Empty class created.
 * @edit SG-BTSP3.00.01
 * - Class extends \GIndie\ScriptGenerator\HTML5\Category\StylesSemantics\Div
 * - Created __construct(), $brand, getBrand(), setBrand()
 * @edit SG-BTSP3.00.02 18-02-23
 * - Created brandImage()
 */
class Header extends \GIndie\ScriptGenerator\HTML5\Category\StylesSemantics\Div
{

    /**
     * 
     * @param string $urlImage
     * @param string $brandName
     * @param string $href
     * 
     * @return \GIndie\ScriptGenerator\HTML5\Category\Links\Hyperlink
     */
    public static function brandImage($urlImage, $brandName, $href = "#")
    {
        return Links::hyperlink($href)->addContent(Images::img($urlImage, $brandName));
    }

    /**
     * 
     * @param type $content
     * 
     * @since SG-BTSP3.00.01
     */
    public function __construct($brand = null)
    {
        parent::__construct(null, ["class" => "navbar-header"]);
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
