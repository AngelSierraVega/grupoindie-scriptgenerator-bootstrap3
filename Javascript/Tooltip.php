<?php

/**
 * GI-SG3-Bootstrap3-DVLP - Tooltip
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (c) 2018 Angel Sierra Vega. Grupo INDIE.
 * @license file://LICENSE MIT License
 *
 * @package \GIndie\ScriptGenerator\Bootstrap3
 *
 * @since 18-08-14
 * @version 00.BF
 */

namespace GIndie\ScriptGenerator\Bootstrap3\Javascript;

use GIndie\ScriptGenerator\DML;

/**
 * Description of Tooltip
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 */
class Tooltip
{
    /**
     * 
     * @param mixed $node
     * @param string $text
     * @since 18-10-15
     * @return mixed
     */
    public static function tooltipOnTop($node, $text)
    {
        switch (true)
        {
            case \is_subclass_of($node, DML\Node::class, false):
                $node->setAttribute("data-toggle", "tooltip");
                $node->setAttribute("data-placement", "top");
                $node->setAttribute("title", $text);
                break;

            default:
                throw new \Exception("Param node {$node} is not subclass of " . DML\Node::class);
                break;
        }
        return $node;
    }

    /**
     * 
     * @param mixed $node
     * @param string $text
     * @since 18-08-14
     * @return mixed
     */
    public static function tooltipOnLeft($node, $text)
    {
        switch (true)
        {
            case \is_subclass_of($node, DML\Node::class, false):
                $node->setAttribute("data-toggle", "tooltip");
                $node->setAttribute("data-placement", "left");
                $node->setAttribute("title", $text);
                break;

            default:
                throw new \Exception("Param node {$node} is not subclass of " . DML\Node::class);
                break;
        }
        return $node;
    }

    /**
     * 
     * @return string
     * @since 18-08-14
     */
    public static function getActivationScript()
    {
        return "$('[data-toggle=\"tooltip\"]').tooltip()";
    }

}
