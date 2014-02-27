<?php
//termi.lv
/////////////////////////////////////////////////////////////////
defined( '_V' ) or die( 'Restricted access' );
/////////////////////////////////////////////////////////////////
require_once ($absolutePathAdmin.'/includes/prog/Edit.class.php');
$editing=new Edit($db, $menu->link['paramsConfig']);
if(!isset($menu->other[0])){
    $editing->loadAll();
    $editing->saveAll();
} else {
    if($menu->other[0]=='new'){
        $editing->createNew();
        $errorPage=false;
    } elseif($editing->loadOne((int)$menu->other[0])){
        $errorPage=false;
    }
    if(!$errorPage){
        if(arg('action')=='update-element'){
            if($menu->other[0]=='new'){
                $editing->createNewElement();
                $editing->saveOne(true);
            } else {
                $saved=$editing->saveOne();
            }
        }
        $oneObject = $editing->getOneObject();
        $menu->active[]=array('friend_url'=>$menu->other[0], 'name'=>$oneObject['name']);
    }
}