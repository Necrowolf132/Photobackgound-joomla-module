<?php
jimport('joomla.form.formfield');

class JFormFieldCampofondo extends JFormField {

    protected $type = 'Campofondo';

    // getLabel() left out

    public function getInput() {

        $doc = JFactory::getDocument();
        $js = <<<JS
        jQuery(function ($) {
        	$(document).on('submit','#module-form', {}, function(event) {
        	  event.preventDefault();
        	  Joomla.submitbutton('module.save');
        	});
        })
JS;
        $doc->addScriptDeclaration($js);

        return '<select id="'.$this->id.'" name="'.$this->name.'">'.
            '<option value="1" >New York</option>'.
            '<option value="2" >Chicago</option>'.
            '<option value="3" >San Francisco</option>'.
            '</select>';
    }
}