<?php
//termi.lv
/////////////////////////////////////////////////////////////////
defined( '_V' ) or die( 'Restricted access' );
/////////////////////////////////////////////////////////////////

Class ShowEdit
{
    ////////////////////////////////////////////////////////////////////////////////
    function displaySaved($s)
    {
        ?>

        <div id="saved"><?php echo $s;?></div><?php
    }
    ////////////////////////////////////////////////////////////////////////////////
    function displayAll($objects, $fields, $url, $submit = false)
    {
        $viewFields = array_keys($fields);
        $fieldTotal = 0;
        ?>

        <form action="" name="reorder" method="post">
            <input type="hidden" name="action" value="allEdit" />
            <table id="navigation">
                <thead>
                    <tr><?php
                        foreach($viewFields as $f){
                            if(!(isset($fields[$f]['type'])&&$fields[$f]['type']=='hidden')){
                                    $fieldTotal++;?>

                                    <td><?php echo lng($f);?></td><?php
                            }
                        }?>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <td colspan="<?php echo $fieldTotal;?>"><?php
                        if($submit){
                            ?><button type="submit"><?php echo lng('Submit');?></button><?php
                        }?></td>
                    </tr>
                </tfoot>
                <tbody><?php
                    $a=1;
                    if($objects){
                        foreach($objects as $o){?>

                            <tr class="c_<?php echo $a%2;?><?php echo array_key_exists('published', $o) ? ' public_'.$o['published'] : '';?>"><?php
                                $a++;
                                foreach($viewFields as $f){
                                        if(!(isset($fields[$f]['type'])&&$fields[$f]['type']=='hidden')){?>

                                            <td><?php echo ShowEdit::show($f, (isset($o[$f]) ? $o[$f] : false), array_merge(
                                                    $fields[$f]
                                                    , array(
                                                        'id'=>$o['id']
                                                        , 'url'=>$url
                                                    )
                                                ));?></td><?php
                                        }
                                }?>

                            </tr><?php
                        }
                    }?>

                </tbody>
            </table>
        </form>

        <?php
    }
    ////////////////////////////////////////////////////////////////////////////////
    function createNew($url)
    {
        ?>

        <div class="new-link"><a href="<?php echo $url?>" title="<?php echo lng('Create new');?>"><?php echo lng('Create new');?></a></div><?php
    }
    ////////////////////////////////////////////////////////////////////////////////
    function show($field, $value, $params)
    {
        $type = array_key_exists('type', $params) ? $params['type'] : 'display';
        $newValue = array_key_exists('possible', $params)&&$params['possible']&&array_key_exists($value, $params['possible'])? $params['possible'][$value]['name'] : $value;
        $templateValue = array_key_exists('template', $params)&&$params['template'] ? str_replace('%value%', $value, $params['template']) : $value;
        switch($type){
            case 'hidden':
                return;
            break;
            case 'display':
                echo $newValue;
            break;
            case 'editLink':
                ?><a href="<?php echo $params['url'];?>/<?php echo $params['id'];?>/"><?php
                echo $newValue;?></a><?php
            break;
            case 'textAll':?>

                <input type="text" class="s-text" name="<?php echo $field;?>[<?php echo $params['id'];?>]" value="<?php echo $newValue;?>" /><?php
            break;
            case 'yesno':?>
                <a href="<?php echo $params['url'];?>/?<?php echo $field;?>=<?php echo $params['id'];?>"><?php
                echo yes_no($newValue);?></a><?php
            break;
            case 'delete':?>
                <a href="<?php echo $params['url'];?>/?<?php echo $field;?>=<?php echo $params['id'];?>" class="delete"><?php
                echo lng($field);?></a><?php
            break;
            case 'link':
                ?><a href="<?php echo $params['url'];?>/?<?php echo $field;?>=<?php echo $value;?>"><?php
                echo $newValue;?></a><?php
            break;
            case 'outLink':
                ?><a href="<?php echo str_replace('%id%', $params['id'], $params['urlTemplate']);?>"><?php
                echo lng($field);?></a><?php
            break;
            case 'text':?>

                <input type="text" id="<?php echo $field;?>" name="<?php echo $field;?>" value="<?php echo $value;?>" /><?php
            break;
            case 'textarea':?>

                <textarea cols="20" rows="5" class="textarea" id="<?php echo $field;?>" name="<?php echo $field;?>"><?php echo $value;?></textarea><?php
            break;
            case 'textareaEdit':?>

                <textarea cols="20" rows="10" class="textarea edit" id="<?php echo $field;?>" name="<?php echo $field;?>"><?php echo $value;?></textarea><?php
            break;
            case 'option':
                option($params['possible'], $value, $field, 'id="'.$field.'"');
            break;
            case 'reference':
//                option($params['possible'], unserialize($value), $field.'[]', 'id="'.$field.'" multiple="multiple"');
//            break;
            case 'multiple':

                option($params['possible'], unserialize($value), $field.'[]', 'id="'.$field.'" multiple="multiple"');
            break;
            case 'file':
                echo $templateValue;
                ?>

                <input type="file" id="<?php echo $field;?>" name="<?php echo $field;?>" /><?php

            break;
            case 'fileChoose':
                ?>

                <input type="text" id="<?php echo $field;?>" name="<?php echo $field;?>" value="<?php echo $value;?>" />
                <a href="?" rel="<?php echo $field;?>" class="fileChoose"><?php echo lng('file choose');?></a><?php
            break;
        }
    }
    ////////////////////////////////////////////////////////////////////////////////
    function displayOne($object, $fields, $url)
    {
        $viewFields = array_keys($fields);
        ?>

        <form enctype="multipart/form-data" action="" method="post" name="edit"><?php
            foreach($viewFields as $f){
                                $name = array_key_exists('name', $fields[$f]) ? $fields[$f]['name'] : lng($f);
                                if(in_array($fields[$f]['type'], array('params'))){
                                    ?><fieldset>
                                        <legend><?php echo $name;?></legend>
                                        <?php
                                    continue;
                                }
                                if(in_array($fields[$f]['type'], array('params_end'))){
                                    ?></fieldset><?php
                                    continue;
                                }
                                ?><label for="<?php echo $f;?>"><?php echo $name;?></label><?php
                                ShowEdit::show($f, array_key_exists($f, $object) ? $object[$f] : '', array_merge(
                    $fields[$f]
                    , array(
                        'id'=>$object['id']
                        , 'url'=>$url
                    )
                ));?>
                <br /><?php
            }?>

            <input type="hidden" name="action" value="update-element" />
            <button type="submit" class="submit"><?php echo lng('Submit');?></button>
        </form>
        <?php
    }
    ////////////////////////////////////////////////////////////////////////////////
}
////////////////////////////////////////////////////////////////////////////////