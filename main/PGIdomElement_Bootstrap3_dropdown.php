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
 * Description of PGIdomElement_Bootstrap3_dropdown
 *
 * @author Angel
 */
class PGIdomElement_Bootstrap3_dropdown extends PGIdomElement_Bootstrap3 {
    
    protected $_elementId;
    
    function __construct($elementId,$elementText) {
        try {
            parent::__construct("div");
            $this->PGIpushClass("dropup");
            
            $this->_elementId = $elementId;
            
            $button= new PGIdomElement_Bootstrap3("button");
            
            $button->PGIpushClass("btn");
            $button->PGIpushClass("btn-primary");
            $button->PGIpushClass("dropdown-toggle");
            //$button->PGIsetAttribute("aria-expanded", "false");
            //$button->PGIsetAttribute("aria-haspopup", "true");
            $button->PGIsetAttribute("data-toggle", "dropdown");
            
            $button->PGIsetAttribute("type", "button");
            //$button->PGIsetId($elementId);
            
            
            
            
            $button->PGIpushContent($elementText." ");
            $span = new PGIdomElement_Bootstrap3("span");
            $span->PGIpushClass("caret");
            $button->PGIpushContent($span);
            $this->PGIpushContent($button);
            
            $ul = new PGIdomElement_Bootstrap3("ul");
            $ul->PGIpushClass("dropdown-menu");
            $ul->PGIpushClass("primary");
            $ul->PGIsetAttribute("role", "menu");
            //$ul->PGIsetAttribute("aria-labelledby", $elementId);
            //$ul->PGIsetId("ul_".$elementId);
            
            
            $temp_li = new PGIdomElement_Bootstrap3("li");
            $temp_anchor = new PGIdomElement_Bootstrap3("a");
            $temp_anchor->PGIsetAttribute("href", "?");
            $temp_anchor->PGIpushContent("TEST");
            $temp_li->PGIpushContent($temp_anchor);
            $ul->PGIpushContent($temp_li);
            
            
            $this->PGIpushContent($ul);
        } catch (Exception $e) {
            PGIdomBuilder_plataform::AlertError($e);
        } 
    }
    
    public function PGIpushElement($href,$text){
        try {
            $ul = $this->PGIgetDomElementById("ul_".$this->_elementId);
            $temp_li = new PGIdomElement_Bootstrap3("li");
            $temp_anchor = new PGIdomElement_Bootstrap3("a");
            $temp_anchor->PGIsetAttribute("href", $href);
            $temp_anchor->PGIpushContent($text);
            $temp_li->PGIpushContent($temp_anchor);
            $ul->PGIpushContent($temp_li);
        } catch (Exception $e) {
            PGIdomBuilder_plataform::AlertError($e);
        }
    }
}
