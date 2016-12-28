<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PGIdomElement_Bootstrap3_listGroupItemLinked
 *
 * @author Angel
 */
class PGIdomElement_Bootstrap3_listGroupItemLinked extends PGIdomElement_Bootstrap3_listGroupItem {
    //protected $_href;

    /**
     * Description of PGIdomElement_Bootstrap3_listGroupItemLinked
     * 
     * @version alpha.03.05
     */
    function __construct($href, $heading, $active = FALSE, $text = null) {
        try {
            parent::__construct($heading, $active, $text);
            $this->PGIsetTag("a");
            $this->PGIsetAttribute("href", $href);
        } catch (Exception $e) {
            PGIdomBuilder_plataform::AlertError($e);
        }
    }

}
