<?php

/*
 * Copyright (C) 2016 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\DML\Bootstrap3;

require_once __DIR__ .'/../GI_DML_HTML5/main.php';
//require_once __DIR__ .'/main/Node.php';
require_once __DIR__ .'/main/Dropdown.php';
require_once __DIR__ .'/main/Modal.php';
require_once __DIR__ .'/main/Document.php';

class Factory extends \GIndie\DML\HTML5\Factory {

    public static function Document($title, $lang = "en",$doctype = 'html', $charset = 'UTF-8') {
        try {
            return new \GIndie\DML\Bootstrap3\Document($title, $lang);
        } catch (Exception $e) {
            displayError($e);
        }
    }

}