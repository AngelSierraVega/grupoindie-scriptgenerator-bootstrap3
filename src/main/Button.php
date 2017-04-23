<?php

/*
 * Copyright (C) 2016 Angel
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace GIgenerator\DML\HTML5\Bootstrap3;


class Button extends \GIgenerator\DML\HTML5\FormInput\Button {

    use ContextualColors;

    //protected $base
    public function __construct($content = null, $type = 0) {
        parent::__construct($content, $type);
        $this->baseClass = "btn";
        $this->addClass($this->baseClass);
        $this->setContext(static::$COLOR_DEFAULT, false);
    }

}

/**
 * Description of PGIdomElement_Bootstrap3_button
 *
 * @author Angel
 */
class PGIdomElement_Bootstrap3_buttonDEPREACATED {

    public static function buttonInfo($href, $label = null) {
        $rtnButton = new PGIdomElement_Bootstrap3_button($href, PGIdomElement_Bootstrap3_icon::iconInfo(), $label, $class = "default");
        //$rtnButton->PGIpushClass("btn-info");
        $rtnButton->PGIpushClass("getModal-button");
        return $rtnButton;
    }

    public static function buttonEdit($href, $label = null) {
        $rtnButton = new PGIdomElement_Bootstrap3_button($href, PGIdomElement_Bootstrap3_icon::iconEdit(), $label, $class = "success");
        $rtnButton->PGIpushClass("getModal-button");
        return $rtnButton;
    }

    public static function buttonTrash($href, $label = null) {
        $rtnButton = new PGIdomElement_Bootstrap3_button($href, PGIdomElement_Bootstrap3_icon::iconDelete(), $label, $class = "danger");
        $rtnButton->PGIpushClass("getModal-button");
        return $rtnButton;
    }

    public static function buttonCreate($href, $label = null) {
        $rtnButton = new PGIdomElement_Bootstrap3_button($href, PGIdomElement_Bootstrap3_icon::iconPlus(), $label, $class = "success");
        $rtnButton->PGIpushClass("getModal-button");
        return $rtnButton;
    }

    public static function buttonHide($href, $label = null) {
        $rtnButton = new PGIdomElement_Bootstrap3_button($href, PGIdomElement_Bootstrap3_icon::iconEyeOpen(), $label, $class = "success");
        $rtnButton->PGIpushClass("getModal-button");
        return $rtnButton;
    }

    public static function buttonShow($href, $label = null) {
        $rtnButton = new PGIdomElement_Bootstrap3_button($href, PGIdomElement_Bootstrap3_icon::iconEyeClosed(), $label, $class = "default");
        $rtnButton->PGIpushClass("getModal-button");
        return $rtnButton;
    }

    public static function buttonEnvelope($href, $label = null) {
        $rtnButton = new PGIdomElement_Bootstrap3_button($href, PGIdomElement_Bootstrap3_icon::iconEnvelope(), $label, $class = "success");
        $rtnButton->PGIpushClass("getModal-button");
        return $rtnButton;
    }

    public static function buttonPrint($href, $label = null, $getModal = false) {
        $rtnButton = new PGIdomElement_Bootstrap3_button($href, PGIdomElement_Bootstrap3_icon::iconPrint(), $label, $class = "success");
        if ($getModal) {
            $rtnButton->PGIpushClass("getModal-button");
        }
        return $rtnButton;
    }

    /**
     * Description of PGIdomElement_Bootstrap3_button
     * Standard button
     * <button type="button" class="btn btn-default"></button>
     * @author Angel
     */
    function __construct($href, PGIdomElement_Bootstrap3_icon $icon = null, $label = null, $class = "default") {
        try {
            parent::__construct("button");
            $this->PGIpushClass("btn");
            $this->PGIpushClass("btn-$class");
            $this->PGIsetAttribute("href", $href);
            if ($icon !== null) {
                $this->PGIpushContent($icon);
                if ($label !== null) {
                    $this->PGIpushText(" " . $label);
                }
            } else {
                if ($label !== null) {
                    $this->PGIpushText($label);
                }
            }
        } catch (Exception $e) {
            PGIdomBuilder_plataform::AlertError($e);
        }
    }

}
