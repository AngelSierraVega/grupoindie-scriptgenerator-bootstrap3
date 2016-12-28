<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'PGIcommon/PGIdomElement/PGIdomElement_Bootstrap3/PGIdomElement_Bootstrap3_listGroup/PGIdomElement_Bootstrap3_listGroupItem.php';
include_once 'PGIcommon/PGIdomElement/PGIdomElement_Bootstrap3/PGIdomElement_Bootstrap3_listGroup/PGIdomElement_Bootstrap3_listGroupItemLinked.php';

/**
 * Description of PGIdomElement_Bootstrap3_listGroup
 *
 * @author Angel
 */
class PGIdomElement_Bootstrap3_listGroup extends PGIdomElement_Bootstrap3 {
    /**
     * Description of PGIdomElement_Bootstrap3_listGroup
     * 
     * @version alpha.03.05
     */
    function __construct() {
        try {
            $this->PGIsetTag("div");
            $this->PGIpushClass("list-group");
        } catch (Exception $e) {
            PGIdomBuilder_plataform::AlertError($e);
        }
    }
    
    /**
     * Description of PGIpushListGroupItem
     * 
     * @version alpha.03.05
     */
    public function PGIpushListGroupItem(PGIdomElement_Bootstrap3_listGroupItem $listGroupItem){
        try {
            return $this->PGIpushContent($listGroupItem);
        } catch (Exception $e) {
            PGIdomBuilder_plataform::AlertError($e);
        }
    }
}
