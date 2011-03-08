<?php
/////////////////////////////////////////////////////////////////
defined( '_V' ) or die( 'Restricted access' );
/////////////////////////////////////////////////////////////////
function escArgHtml($field){
	return esc_html(arg($field));
}
/////////////////////////////////////////////////////////////////
function getMarks(){
    global $db;
    return $db->sqla("
            SELECT
                    m.`id`, m.`name`
            FROM
                    `#__mark` AS m
            ORDER BY
                    m.`id` ASC
    ", 'id', true);
}
/////////////////////////////////////////////////////////////////
function onModelDelete(){
    return true;
}
/////////////////////////////////////////////////////////////////
function getModels(){
    global $db;
    return $db->sqla("
            SELECT
                    m.`id`, CONCAT(ma.`name`, '->', m.`name`) AS 'name'
            FROM
                    `#__model` AS m
            LEFT JOIN
                    `#__mark` AS ma
            ON
                    m.`mark_id`=ma.`id`
            ORDER BY
                    m.`mark_id` ASC, m.`order` ASC, m.`name` ASC
    ", 'id', true);
}
/////////////////////////////////////////////////////////////////
function onAutoDelete($field){
    global $db, $wwwPathImages;
    $id = arg($field);
    $images = $db->sqla("
        SELECT `id`, `path` FROM `#__image` WHERE `auto_id`=$id
    ");
    foreach($images as $i){
        if(file_exists($wwwPathImages.'/'.$i['path'])){
            unlink($wwwPathImages.'/'.$i['path']);
            $db->sqde("DELETE FROM `#__image` WHERE `id`=".$i['id']." LIMIT 1");
        } else {
            return false;
        }
    }
    return true;
}
/////////////////////////////////////////////////////////////////
