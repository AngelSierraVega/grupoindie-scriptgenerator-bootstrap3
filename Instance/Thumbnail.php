<?php

/**
 * GI-SG3-Bootstrap3-DVLP - Thumbnail
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (c) 2019 Angel Sierra Vega. Grupo INDIE.
 * @license file://LICENSE
 *
 * @package GIndie\ScriptGenerator\Bootstrap3
 *
 * @since 19-02-02
 * @version 00.C0
 */

namespace GIndie\ScriptGenerator\Bootstrap3\Instance;

use GIndie\ScriptGenerator\HTML5\Category\Images;
use GIndie\ScriptGenerator\HTML5\Category\StylesSemantics;

/**
 * Extend Bootstrap's grid system with the thumbnail component to easily display grids of images, 
 * videos, text, and more.
 * 
 * @link <https://getbootstrap.com/docs/3.3/components/#thumbnails>
 * 
 */
class Thumbnail extends StylesSemantics\Div
{

    /**
     * @since 19-02-02
     */
    const SHAPE_ROUNDED = "img-rounded";

    /**
     * @since 19-02-02
     */
    const SHAPE_CIRCLE = "img-circle";

    /**
     * @since 19-02-02
     */
    const SHAPE_THUMBNAIL = "img-thumbnail";

    /**
     *
     * @var null|\GIndie\ScriptGenerator\HTML5\Category\StylesSemantics\Div
     * @since 19-02-02
     */
    private $caption;

    /**
     *
     * @var \GIndie\ScriptGenerator\HTML5\Category\Images\Img
     * @since 19-02-02
     */
    private $img;

    /**
     * 
     * @param string $src
     * @param string $alt
     * @since 19-02-02
     */
    public function __construct($src, $alt, $responsive = false, $centered = false, $shape = null)
    {
        $this->img = Images::img($src, $alt);
        if ($responsive === true) {
            $this->img->addClass("img-responsive");
        }
        if ($centered === true) {
            $this->img->addClass("center-block");
        }
        if (\is_null($shape) === false) {
            $this->img->addClass($shape);
        }
        parent::__construct($this->img, ["class" => "thumbnail"]);
    }

    /**
     * 
     * @param mixed $content
     * @since 19-02-02
     * @return \GIndie\ScriptGenerator\Bootstrap3\Instance\Thumbnail
     */
    public function setCaption($content)
    {
        switch (true)
        {
            case (isset($this->caption) === false):
                $this->caption = $this->addContentGetPointer(StylesSemantics::div($content,
                        ["class" => "caption"]));
                break;
            default:
                $this->caption->removeContent();
                $this->caption->addContent($content);
                break;
        }
        return $this;
    }

    /**
     * 
     * @return null|mixed
     * @since 19-02-02
     */
    public function getCaption()
    {
        return isset($this->caption) ? $this->caption : null;
    }

    /**
     * 
     * @return \GIndie\ScriptGenerator\HTML5\Category\Images\Img
     * @since 19-02-02
     */
    public function getImg()
    {
        return $this->img;
    }

}
