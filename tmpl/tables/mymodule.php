<?php


defined('_JEXEC') or die('Restricted access');

/**
 * My componente Table class
 *
 * @since  0.0.1
 */
class TableMymodule extends JTable
{
    /**
     * Constructor
     *
     * @param   Esto es el conector con la base de datos
     *
     */

    var $id       = null;
    var $campo    = null;
    var $content  = null;
    var $extra    = null;
    var $posit    = null;
    var $present  = null;

    function __construct(&$db)
    {
        parent::__construct('#__mod_mymodule', 'id', $db);
    }
}