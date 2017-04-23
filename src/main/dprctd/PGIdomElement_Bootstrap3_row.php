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
 * Description of PGIdomElement_Bootstrap3_row
 *
 * @author Angel
 */
class PGIdomElement_Bootstrap3_row extends PGIdomElement_Bootstrap3 {

    function __construct() {
        try {
            parent::__construct("div");
            $this->PGIpushClass("row");
        } catch (Exception $e) {
            PGIdomBuilder_plataform::AlertError($e);
        }
    }
    
    public function PGIaddContentAsCol($content,$col) {
        try {
            $tmpCol = new PGIdomElement_Bootstrap3("div");
            $tmpCol->PGIpushClass($col);
            $tmpCol->PGIaddContent($content);
            $this->PGIaddContent($tmpCol);
        } catch (Exception $e) {
            PGIdomBuilder_plataform::AlertError($e);
        }
    }

}
