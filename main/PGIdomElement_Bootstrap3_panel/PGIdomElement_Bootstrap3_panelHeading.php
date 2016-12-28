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
 * Description of PGIdomElement_Bootstrap3_panelHeading
 *
 * @author Angel
 */
class PGIdomElement_Bootstrap3_panelHeading extends PGIdomElement_Bootstrap3 {
    private $_panelTitle = NULL;
    function __construct($title) {
        try {
            parent::__construct("div");
            $this->PGIpushClass("panel-heading");
            $panelTitle = new PGIdomElement_Bootstrap3_panelTitle($title);
            $this->_panelTitle = &$panelTitle;
            $this->PGIaddContent($this->_panelTitle);
        } catch (Exception $e) {
            PGIdomBuilder_plataform::AlertError($e);
        } 
    }
    
    public function PGIaddButton(PGIdomElement_Bootstrap3_button $button) {
        return $this->_panelTitle->PGIaddButton($button);
    }
}
