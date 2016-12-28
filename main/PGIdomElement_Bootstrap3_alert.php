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
 * Description of PGIdomElement_Bootstrap3_alert
 *
 * @author Angel
 */
class PGIdomElement_Bootstrap3_alert extends PGIdomElement_Bootstrap3 {

    /**
     * Description of PGIdomElement_Bootstrap3_alert
     *
     * @version alpha.03.32
     */
    function __construct($dismisable = true) {
        try {
            parent::__construct($tag = "div", $startTag = TRUE, $endTag = TRUE);
            $this->PGIpushClass("alert");
            $this->PGIsetAttribute("role", "alert");
            if ($dismisable) {
                $this->PGIpushClass("alert-dismissible");
            }
        } catch (Exception $e) {
            PGIdomElement_Platform::alertError($e);
        }
    }

    /**
     * Description of PGIaddParagraph
     *
     * @version alpha.03.45
     */
    public function PGIaddParagraph($text) {
        try {
            return $this->PGIaddContent(PGIdomElement_HTML5_text::PGIparagraph($text));
        } catch (Exception $e) {
            PGIdomElement_Platform::alertError($e);
        }
    }

}

/**
 * Description of PGIdomElement_Bootstrap3_alertSuccess
 *
 * @author Angel
 */
class PGIdomElement_Bootstrap3_alertSuccess extends PGIdomElement_Bootstrap3_alert {

    /**
     * Description of PGIdomElement_Bootstrap3_alertSuccess
     *
     * @version alpha.03.32
     */
    function __construct($dismisable = true) {
        try {
            parent::__construct($dismisable);
            $this->PGIpushClass("alert-success");
        } catch (Exception $e) {
            PGIdomElement_Platform::alertError($e);
        }
    }

}

/**
 * Description of PGIdomElement_Bootstrap3_alertInfo
 *
 * @author Angel
 */
class PGIdomElement_Bootstrap3_alertInfo extends PGIdomElement_Bootstrap3_alert {

    /**
     * Description of PGIdomElement_Bootstrap3_alertInfo
     *
     * @version alpha.03.32
     */
    function __construct($dismisable = true) {
        try {
            parent::__construct($dismisable);
            $this->PGIpushClass("alert-info");
        } catch (Exception $e) {
            PGIdomElement_Platform::alertError($e);
        }
    }

}

/**
 * Description of PGIdomElement_Bootstrap3_alertWarning
 *
 * @author Angel
 */
class PGIdomElement_Bootstrap3_alertWarning extends PGIdomElement_Bootstrap3_alert {

    /**
     * Description of PGIdomElement_Bootstrap3_alertWarning
     *
     * @version alpha.03.32
     */
    function __construct($dismisable = true) {
        try {
            parent::__construct($dismisable);
            $this->PGIpushClass("alert-warning");
        } catch (Exception $e) {
            PGIdomElement_Platform::alertError($e);
        }
    }

}

/**
 * Description of PGIdomElement_Bootstrap3_alertDanger
 *
 * @author Angel
 */
class PGIdomElement_Bootstrap3_alertDanger extends PGIdomElement_Bootstrap3_alert {

    /**
     * Description of PGIdomElement_Bootstrap3_alertDanger
     *
     * @version alpha.03.32
     */
    function __construct($dismisable = true) {
        try {
            parent::__construct($dismisable);
            $this->PGIpushClass("alert-danger");
        } catch (Exception $e) {
            PGIdomElement_Platform::alertError($e);
        }
    }

}
