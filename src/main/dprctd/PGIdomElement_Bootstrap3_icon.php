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
 * Description of PGIdomElement_Bootstrap3_icon
 *
 * @author Angel
 */
class PGIdomElement_Bootstrap3_icon extends PGIdomElement_Bootstrap3 {
    
    public static function iconInfo(){
        //return static::iconCustom("fa fa-info");
        $rtnIcon = new PGIdomElement_Bootstrap3_icon("fa fa-info");
        return $rtnIcon;
    }
    
    public static function iconUser() {
        return static::iconCustom("fa fa-user");
    }
    
    public static function caretDown(){
        $rtnIcon = new PGIdomElement_Bootstrap3_icon("fa fa-caret-down");
        return $rtnIcon;
    }
    
    public static function iconCustom($iconClass){
        $rtnIcon = new PGIdomElement_Bootstrap3_icon($iconClass);
        return $rtnIcon;
    }
    
    public static function iconPlus(){
        $rtnIcon = new PGIdomElement_Bootstrap3_icon("fa fa-plus");
        return $rtnIcon;
    }
    public static function iconEyeOpen(){
        $rtnIcon = new PGIdomElement_Bootstrap3_icon("glyphicon glyphicon-eye-open");
        return $rtnIcon;
    }
    public static function iconEyeClosed(){
        $rtnIcon = new PGIdomElement_Bootstrap3_icon("glyphicon glyphicon-eye-close");
        return $rtnIcon;
    }
    public static function iconDelete(){
        $rtnIcon = new PGIdomElement_Bootstrap3_icon("fa fa-trash");
        return $rtnIcon;
    }
    //
    public static function iconBuilding(){
        $rtnIcon = new PGIdomElement_Bootstrap3_icon("fa fa-building");
        return $rtnIcon;
    }
    public static function iconMail(){
        $rtnIcon = new PGIdomElement_Bootstrap3_icon("glyphicon glyphicon-envelope");
        return $rtnIcon;
    }
    public static function iconEnvelope(){
        $rtnIcon = new PGIdomElement_Bootstrap3_icon("glyphicon glyphicon-envelope");
        return $rtnIcon;
    }
    public static function iconEdit(){
        $rtnIcon = new PGIdomElement_Bootstrap3_icon("fa fa-edit");
        return $rtnIcon;
    }
    
    public static function iconHelp(){
        $rtnIcon = static::icon("icon-help");
        return $rtnIcon;
    }
    
    public static function iconPrint(){
        $rtnIcon = new PGIdomElement_Bootstrap3_icon("glyphicon glyphicon-print");
        return $rtnIcon;
    }
    
    public static function iconCopy(){
        $rtnIcon = new PGIdomElement_Bootstrap3_icon("fa fa-copy");
        return $rtnIcon;
    }

    function __construct($iconClass) {
        try {
            parent::__construct("i");
            $this->PGIpushClass($iconClass);
        } catch (Exception $e) {
            PGIdomBuilder_plataform::AlertError($e);
        }
    }

}
