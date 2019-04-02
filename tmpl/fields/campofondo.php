<?php
jimport('joomla.form.formfield');

class JFormFieldCampofondo extends JFormField {

    protected $type = 'Campofondo';

    // getLabel() left out

    public function getInput() {
        return '<select id="'.$this->id.'" name="'.$this->name.'">'.
            '<option value="1" >New York</option>'.
            '<option value="2" >Chicago</option>'.
            '<option value="3" >San Francisco</option>'.
            '</select>';
    }
}