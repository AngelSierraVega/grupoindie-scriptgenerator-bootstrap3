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

/**
 * Description of PGIdomElement_Bootstrap3_panelTitle
 *
 * @author Angel
 */
class PGIdomElement_Bootstrap3_panelTitle extends PGIdomElement_Bootstrap3 {

    /**
     * Description of PGIdomElement_Bootstrap3_panelTitle
     *
     * @author Angel
     */
    function __construct($title) {
        try {
            parent::__construct("h3");
            $this->PGIpushClass("panel-title");
            $this->PGIpushText(" ".$title);
        } catch (Exception $e) {
            PGIdomBuilder_plataform::AlertError($e);
        }
    }

    /**
     * Description of PGIaddButton
     *
     * @author Angel
     */
    public function PGIaddButton(PGIdomElement $button) {
        return $this->PGIprependContent($button);
        //return $this->PGIpushContent($button);
    }
    public function PGIaddButtonDEPRECATED($href, PGIdomElement_Bootstrap3_icon $icon, $label, $class) {
        $tmpButton = new PGIdomElement_Bootstrap3_button($href, $icon, $label, $class);
        $this->PGIprependContent($tmpButton);
    }

}
