<?php
class ModMymoduleHelper
{
    /**
     * Recupera lainformacion de base de datos y codifica de manera adecuada para la vista
     *
     * @param   EL array $params es un objeto contenido en el modulo de parametros
     *
     * @access public
     *
     */
    public static function cotejarDatas(){
        $tablaModulo = self::getTable();
    }
    public static function getTable($nombreFilePHP ='Mymodule' , $PrefijoClase = 'Table', $debolucion = array()) {
        return JTable::getInstance($nombreFilePHP,$PrefijoClase,$debolucion);
    }
    public static function getSaludo($db, $params)
    {
// Armo el Query
        $query = $db->getQuery(true)
            ->select($db->quoteName(array('campo', 'content', 'extra', 'posit')))
            ->from($db->quoteName('#__mod_mymodule'))
            ->where('present = true')->order('posit ASC ');
// Preparo la peticion
        $db->setQuery($query);
// Esto carga el primer valor de la primera fila
        // $result = $db->loadResult();
//esto me debuelve todos los objetivos de la tabla
        $result = $db->loadRowList();
// Return the Hello
        $appJese  = JFactory::getApplication()->input;
        $mostarParametros = $appJese->getTemplate(true)->params;
        $mostrarmodulo = JModuleHelper::getModule('mod_mymodule');
        $tablaModulo = self::getTable();
        $mostrarInfotabla = $tablaModulo->getFields();

        array_push($result, $params);
        array_push($result, $mostarParametros);
        array_push($result, $mostrarmodulo);
        array_push($result, $appJese->get("primer-content"));
        array_push($result, $mostrarInfotabla);
        return $result;
    }

    public static function guardarNuevo($db, $params)
    {

        $query = $db->getQuery(true);
        $guardar = $params->get('primer-content', 'Basio', 'String');
// Fields to update.
        $campos = array(
            $db->quoteName('content') . ' = ' . $db->quote($guardar)
        );

// Conditions for which records should be updated.
        $where = array(
            $db->quoteName('id') . ' = 1'
        );

        $query->update($db->quoteName('#__mod_mymodule'))->set($campos)->where($where);

        $db->setQuery($query);

        $result = $db->execute();
        //echo $result;
    }
}