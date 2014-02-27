<?php
//termi.lv
/////////////////////////////////////////////////////////////////
defined( '_V' ) or die( 'Restricted access' );
/////////////////////////////////////////////////////////////////
require_once ($absolutePathAdmin.'/includes/tmp/Edit.class.php');
/////////////////////////////////////////////////////////////////////////////
//echo $menu->link['componentUrl'];
if(!isset($menu->other[0])){
    ShowEdit::displayAll($editing->getObjects(), $editing->getFields(), $menu->link['componentUrl'], isset($displayNoEdit)&&$displayNoEdit ? false : true);
    ShowEdit::createNew($menu->link['componentUrl'].'/new?'.($editing->getEditParams()));
} else {
    if(!empty($saved)) {
        ShowEdit::displaySaved($saved);
    }
    ShowEdit::displayOne($oneObject, $editing->getFields('edit_fields', array('hidden')), $menu->link['componentUrl'].'/'.$menu->other[0]);
}