<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PGIdomElement_Bootstrap3_listGroupItem
 *
 * @author Angel
 */
class PGIdomElement_Bootstrap3_listGroupItem extends PGIdomElement_Bootstrap3 {
    //protected $_active;
    //protected $_text;
    //protected $_heading;

    /**
     * Description of PGIdomElement_Bootstrap3_listGroupItem
     * 
     * @version alpha.03.05
     */
    function __construct($heading, $active = FALSE, $text = null) {
        try {
            $this->PGIsetTag("li");
            $this->PGIpushClass("list-group-item");
            if ($active !== FALSE) {
                $this->PGIpushClass("active");
            }
            $tempHeading = PGIdomElement_HTML5_text::PGIheader4($heading);
            $tempHeading->PGIpushClass("list-group-item-heading");
            $this->PGIpushContent($tempHeading);
            if ($text !== null) {
                $tempText = PGIdomElement_HTML5_text::PGIparagraph($text);
                $tempText->PGIpushClass("list-group-item-text");
                $this->PGIpushContent($tempText);
            }
        } catch (Exception $e) {
            PGIdomBuilder_plataform::AlertError($e);
        }
    }

}
