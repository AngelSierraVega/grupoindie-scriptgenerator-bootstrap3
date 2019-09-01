<?php

/**
 * GIG-DML-HTML5-Bootstrap3 - Document 2016-12-28
 * @copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 * @license file://LICENSE MIT License
 *
 * @package Bootstrap3
 *
 * @version 00.B0
 */

namespace GIndie\ScriptGenerator\Bootstrap3;

use GIndie\ScriptGenerator\HTML5;

/**
 * Represents a Bootstrap3 Document object
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @since GIG-BTSP3.00.00
 */
class Document extends HTML5\Document
{

    /**
     * Creates a new Bootstrap3 Document object
     * 
     * @param string $title The title of the html document.
     * @param string $lang [optional] The languaje of the html document.
     * @param string|null $pathToCSS
     * @param string|null $pathToTheme
     * @param string|null $pathToJquery
     * @param string|null $pathToJS
     * 
     * @since GIG-BTSP3.00.00
     * 
     * @ut_str construct "<!DOCTYPE html><html lang="en"><head charset="UTF-8"><title></title><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=edge" /><meta name="viewport" content="width=device-width, initial-scale=1" /><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"></link><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"></link></head><body><script>https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js</script><script integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js</script></body></html>"
     * 
     */
    public function __construct($title, $lang = "en", $pathToCSS = \NULL, $pathToTheme = \NULL,
                                $pathToJquery = \NULL, $pathToJS = \NULL)
    {
        parent::__construct($title, $lang, $doctype = "html", $charset = "UTF-8");

        $this->addMeta(["http-equiv" => "Content-Type", "content" => "text/html; charset=utf-8"]);

        $this->addMeta(["http-equiv" => "X-UA-Compatible", "content" => "IE=edge"]);
        $this->addMeta(["name" => "viewport", "content" => "width=device-width, initial-scale=1"]);

        if ($pathToCSS == \NULL) {
            $_css = $this->addLink("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css", "stylesheet");
            $_css->setAttribute("integrity", "sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u");
            $_css->setAttribute("crossorigin", "anonymous");
        } else {
            $this->addLink($pathToCSS, "stylesheet");
        }
        if ($pathToTheme == \NULL) {
            $theme = $this->addLink("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css", "stylesheet");
            $theme->setAttribute("integrity", "sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp");
            $theme->setAttribute("crossorigin", "anonymous");
        } else {
            $this->addLink($pathToTheme, "stylesheet");
        }
        if ($pathToJquery == \NULL) {
            $this->addScript("https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js", true);
        } else {
            $this->addScript($pathToJquery, \TRUE);
        }
        if ($pathToJS == \NULL) {
            $_js = $this->addScript("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js", true);
            $_js->setAttribute("integrity", "sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa");
            $_js->setAttribute("crossorigin", "anonymous");
        } else {
            $this->addScript($pathToJS, \TRUE);
        }
    }

}
