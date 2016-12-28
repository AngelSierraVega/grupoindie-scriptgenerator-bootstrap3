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

include_once 'PGIcommon/PGIdomElement/PGIdomElement_Bootstrap3/PGIdomElement_Bootstrap3_panel/PGIdomElement_Bootstrap3_panelBody.php';
include_once 'PGIcommon/PGIdomElement/PGIdomElement_Bootstrap3/PGIdomElement_Bootstrap3_panel/PGIdomElement_Bootstrap3_panelTitle.php';
include_once 'PGIcommon/PGIdomElement/PGIdomElement_Bootstrap3/PGIdomElement_Bootstrap3_panel/PGIdomElement_Bootstrap3_panelHeading.php';

/**
 * Description of PGIdomElement_Bootstrap3_panel
 *
 * @author Angel
 */
class PGIdomElement_Bootstrap3_panel extends PGIdomElement_Bootstrap3 {
    private $_panelHeading = NULL;
    private $_panelBody = NULL;
    private $_panelClass = NULL;
    function __construct($title,$class="default") {
        try {
            parent::__construct("div");
            $this->PGIpushClass("panel");
            $this->_panelClass = "panel-$class";
            $this->PGIpushClass($this->_panelClass);
            $panelHeading = new PGIdomElement_Bootstrap3_panelHeading($title);
            $this->_panelHeading = &$panelHeading;
            $this->_content[] = $this->_panelHeading;
            $panelBody = new PGIdomElement_Bootstrap3_panelBody();
            $this->_panelBody = &$panelBody;
            $this->_content[] = $this->_panelBody;
            
            
        } catch (Exception $e) {
            PGIdomBuilder_plataform::AlertError($e);
        } 
    }
    
    /**
     * Description of PGIsetPanelClass
     * 
     * @version alpha.03.45
     */
    public function PGIsetPanelClass($class){
        try {
            $_prevClass = $this->_panelClass;
            $this->_panelClass = "panel-$class";
            $this->PGIreplaceClass($_prevClass, $this->_panelClass);
        } catch (Exception $e) {
            PGIdomElement_Platform::alertError($e);
        }
    }
    
    public function PGIaddButton(PGIdomElement $button) {
        return $this->_panelHeading->PGIaddButton($button);
    }
    
    public function PGIaddContent($content = NULL) {
        return $this->_panelBody->PGIaddContent($content);
    }
//    public function PGIpushContent($content = NULL) {
//        return $this->_panelBody->PGIpushContent($content);
//    }
}
