<?php
// Delimita el acceso si no se esta intentando acceder de dentro joomla
defined('_JEXEC') or die;
// Incluyo el archivos con todas las funcionalidades de invocacion de los metodos funcionales que estan en helper
require_once dirname(__FILE__) . '/helper.php';
$db = JFactory::getDbo();
JTable::addIncludePath( '/var/www/html/PrimerJoomla/modules/mod_mymodule/tmpl/tables');
$holajese = modMymoduleHelper::getSaludo($db,$params);
modMymoduleHelper::guardarNuevo($db,$params);
require JModuleHelper::getLayoutPath('mod_mymodule');