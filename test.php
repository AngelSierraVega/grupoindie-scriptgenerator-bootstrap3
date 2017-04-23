<?php

/*
 * Copyright (C) 2016 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */



require_once '/../DML/src/main.php';
require_once '/../HTML5/src/main.php';
require_once '/../HTML5form/src/main.php';

require_once 'src/main.php';
try {
    $document = GIgenerator\DML\HTML5\Bootstrap3\Factory::Document("Bootstrap TEST");

//    $example = new GIgenerator\DML\HTML5\Bootstrap3\Modal\Content("modal title", "this is the content");
//    $document->addContent($example);

    echo $document;
} catch (Exception $e) {
    print($e->getTraceAsString() . "</br>" . $e->getMessage());
}
