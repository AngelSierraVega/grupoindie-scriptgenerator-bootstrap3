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
 * Description of PGIdomElement_Bootstrap3
 *
 * @author Angel
 */
class PGIdomElement_Bootstrap3 extends PGIdomElement_HTML5 {

    public static function label($content) {
        $tempBuilder = new self("span");
        $tempBuilder->PGIpushClass("label");
        $tempBuilder->PGIpushContent($content);
        return $tempBuilder;
    }

    public static function labelSuccess($content) {
        $tempBuilder = self::label($content);
        $tempBuilder->PGIpushClass("label-success");
        return $tempBuilder;
    }

    public static function labelWarning($content) {
        $tempBuilder = self::label($content);
        $tempBuilder->PGIpushClass("label-warning");
        return $tempBuilder;
    }

    public static function labelDanger($content) {
        $tempBuilder = self::label($content);
        $tempBuilder->PGIpushClass("label-danger");
        return $tempBuilder;
    }

    public static function labelInfo($content) {
        $tempBuilder = self::label($content);
        $tempBuilder->PGIpushClass("label-info");
        return $tempBuilder;
    }

    public static function labelDefault($content) {
        $tempBuilder = self::label($content);
        $tempBuilder->PGIpushClass("label-default");
        return $tempBuilder;
    }

    public static function tooltipOnTop(PGIdomElement $element, $title) {
        $element->PGIsetAttribute("data-toggle", "tooltip");
        $element->PGIsetAttribute("data-placement", "top");
        $element->PGIsetAttribute("title", $title);
        return $element;
    }

    public function PGIsetAutoCols($cols = 2, $colSize = "sm", $startIndex = 0) {
        try {
            $originalContent = $this->_content;
            $this->_content = $newContent = [];
            $hlpCount = 0;
            foreach ($originalContent as $tempContent) {
                if ($startIndex > $hlpCount) {
                    $newContent[$hlpCount] = $tempContent;
                    $hlpCount++;
                }
            }

            $row = new PGIdomElement_Bootstrap3("div");
            $row->PGIpushClass("row");
            if ((sizeof($originalContent) - $hlpCount ) == 1) {
                
            }
            $dataSize = round(( sizeof($originalContent) - $hlpCount ) / $cols);
            $colNumber = 12 / $cols;
            //$counter = 0;
            for ($i = 0; $i < $cols; $i++) {
                $tempCol = new PGIdomElement_Bootstrap3("div");
                $tempCol->PGIpushClass("col-$colSize-$colNumber");
                for ($j = $hlpCount; $j < $dataSize; $j++) {
                    $tempCol->PGIpushContent($originalContent[$j]);
                    $hlpCount++;
                }
                //$counter = $dataSize;
                $dataSize = sizeof($originalContent);
                $row->PGIpushContent($tempCol);
            }
            $newContent[] = $row;
            $this->_content = $newContent;
            //$this->PGIpushContent($row);

            return TRUE;
        } catch (Exception $e) {
            PGIdomBuilder_plataform::AlertError($e);
        }
    }

}

include_once 'PGIcommon/PGIdomElement/PGIdomElement_Bootstrap3/PGIdomElement_Bootstrap3_row.php'; //
include_once 'PGIcommon/PGIdomElement/PGIdomElement_Bootstrap3/PGIdomElement_Bootstrap3_listGroup.php';
include_once 'PGIcommon/PGIdomElement/PGIdomElement_Bootstrap3/PGIdomElement_Bootstrap3_dropdown.php';
include_once 'PGIcommon/PGIdomElement/PGIdomElement_Bootstrap3/PGIdomElement_Bootstrap3_button.php';
include_once 'PGIcommon/PGIdomElement/PGIdomElement_Bootstrap3/PGIdomElement_Bootstrap3_icon.php';
include_once 'PGIcommon/PGIdomElement/PGIdomElement_Bootstrap3/PGIdomElement_Bootstrap3_panel.php'; //
include_once 'PGIcommon/PGIdomElement/PGIdomElement_Bootstrap3/PGIdomElement_Bootstrap3_alert.php'; //

//PGIdomElement_Bootstrap3_dropdown