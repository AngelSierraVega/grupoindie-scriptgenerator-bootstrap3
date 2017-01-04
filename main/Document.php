<?php

/*
 * Copyright (C) 2016 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, share, study and 
 * modify it but not distribute it under the terms of the GNU General 
 * Public License as published by the Free Software Foundation, either 
 * version 3 of the License, or (at your option) any later version.
 */
namespace GIndie\DML\Bootstrap3;


/**
 * Represents a Document object
 * @version beta.00.04
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @since 2016-12-28
 */
class Document extends \GIndie\DML\HTML5\Document {

    /**
     * Creates a new Document object
     * @version beta.00.01
     * @param $title The title of the html document.
     * @param $lang [optional] The languaje of the html document.
     * @param $doctype [optional] The document type.
     * @param $charset [optional] The encoding of the html document.
     */
    public function __construct($title, $lang = "en") {
        try {
            parent::__construct($title, $lang, $doctype = "html", $charset = "UTF-8");
            //$this->addContent(\GIndie\DML\HTML5\Factory::Simple("base", ["target"=>"target_loader"]));
            
            $this->addMeta(["http-equiv"=>"X-UA-Compatible","content"=>"IE=edge"]);
            $this->addMeta(["name"=>"viewport","content"=>"width=device-width, initial-scale=1"]);
            
            $_css = $this->addLink("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css", "stylesheet");
            $_css->setAttribute("integrity","sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u");
            $_css->setAttribute("crossorigin","anonymous");
            
            $this->addScript("https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js", true);
            
            $_js = $this->addScript("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js", true);
            $_js->setAttribute("integrity","sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa");
            $_js->setAttribute("crossorigin","anonymous");
            
              //$_js =  $this->addScript("TEST1",false);
              //$_js->setAttribute("attr","value");
               //$this->addScript("TEST2",false);
        } catch (Exception $e) {
            displayError($e);
        }
    }

}