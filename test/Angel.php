<?php

/* 
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

$tmpDir = filter_input(INPUT_SERVER, 'DOCUMENT_ROOT');

require_once $tmpDir . '/GIgenerator/DML/src/main.php';
require_once $tmpDir . '/GIgenerator/HTML5/src/main.php';
require_once $tmpDir . '/GIgenerator/Bootstrap3/src/main.php';

\GIndie\Generator\DML\HTML5\Bootstrap3\Component\PanelTest::run();

//echo \GIndie\Generator\DML\HTML5\Category\Meta::Meta(["name" => "autor"]);
\GIndie\Generator\DML\HTML5\Bootstrap3\Component\Panel\BodyTest::run();


\GIndie\Generator\DML\HTML5\Bootstrap3\Component\Panel\FooterTest::run();

\GIndie\Generator\DML\HTML5\Bootstrap3\Component\Panel\HeadingTest::run();
