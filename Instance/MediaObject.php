<?php

/**
 * GI-SG3-Bootstrap3-DVLP - MediaObject
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (c) 2019 Angel Sierra Vega. Grupo INDIE.
 * @license file://LICENSE
 *
 * @package GIndie\ScriptGenerator\Bootstrap3
 *
 * @since 19-02-03
 * @version 00.C0
 */

namespace GIndie\ScriptGenerator\Bootstrap3\Instance;

use GIndie\ScriptGenerator\HTML5\Category\Basic;
use GIndie\ScriptGenerator\HTML5\Category\StylesSemantics\Div;
use GIndie\ScriptGenerator\HTML5\Category\Images;

/**
 * Abstract object styles for building various types of components (like blog comments, Tweets, 
 * etc) that feature a left- or right-aligned image alongside textual content.
 *
 * @link <https://getbootstrap.com/docs/3.3/components/#media>
 * 
 * @todo Media object as list
 */
class MediaObject extends Div
{

    /**
     * @since 19-02-03
     */
    const PSTN_LEFT = "media-left";

    /**
     * @since 19-02-03
     */
    const PSTN_RIGHT = "media-right";

    /**
     * @since 19-02-03
     */
    const ALGNMNT_TOP = "media-top";

    /**
     * @since 19-02-03
     */
    const ALGNMNT_MIDDLE = "media-middle";

    /**
     * @since 19-02-03
     */
    const ALGNMNT_BOTTOM = "media-bottom";

    /**
     *
     * @var \GIndie\ScriptGenerator\HTML5\Category\StylesSemantics\Div 
     * @since 19-02-03
     */
    private $mediaObject;

    /**
     *
     * @var \GIndie\ScriptGenerator\HTML5\Category\StylesSemantics\Div 
     * @since 19-02-03
     */
    private $mediaBody;

    /**
     * <div class="media">...</div>
     * 
     * @param string $src
     * @param string $alt
     * @param string $mediaHeading
     * @param string $mediaText
     * @param string $position
     * @param string $alignement
     * @since 19-02-03
     */
    public function __construct($src, $alt, $mediaHeading, $mediaText, $position = "media-left", $alignement = "media-top")
    {
        $this->mediaObject = new Div(Images::img($src, $alt)->addClass("media-object"),
            ["class" => "{$position} {$alignement}"]);
        $this->mediaBody = new Div([Basic::header(4, $mediaHeading)->addClass("media-heading"),
            Basic::paragraph($mediaText)], ["class" => "media-body"]);
        parent::__construct(null, ["class" => "media"]);
        $this->addContent($this->mediaObject);
        $this->addContent($this->mediaBody);
    }

}
