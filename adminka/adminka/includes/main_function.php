<?php
defined( '_V' ) or die( 'Restricted access' );

///////////////////////////////////////////////////////////////////////////////
function prepareMenu($menu){
        $id = 1;
        $m = array('0'=>array(
                array(
                    "id"=>$id,
                    "name"=> lng('index'),
                    "parent_id"=> "0",
                    "friend_url"=> "index",
                    "component"=> "index",
                    "component_id"=>    "",
                    "template"=>    "",
                    "type"=>    "h",
                    "params"=>""
                )
        ));
        foreach(array_keys($menu) as $name){
                $id++;
                $m[0][] = array(
                        'id'=>$id
                        , 'name'=>lng($name)
                        , 'parent_id'=>'0'
                        , 'friend_url'=>$name
                        , 'component'=>'Edit'
                        , 'component_id'=>    ''
                        , 'template'=>    ''
                        , 'type'=>    'm'
                        , 'params'=>''
                        , 'paramsConfig'=>array_merge(array(
                                'name'=>lng($name)
                                ,'table' => $name
                        ), $menu[$name])
                );
        }
//        $id++;
//        $m[0][] = array(
//            "id"=> $id,
//            "name"=> lng('translate'),
//            "parent_id"=> "0",
//            "friend_url"=> "translate",
//            "component"=> "translate",
//            "component_id"=>    "",
//            "template"=>    "",
//            "type"=>    "m",
//            "params"=>""
//        );
//        $id++;
//        $m[0][] = array(
//            "id"=> $id,
//            "name"=> "design",
//            "parent_id"=> "0",
//            "friend_url"=> "design",
//            "component"=> "design",
//            "component_id"=>    "",
//            "template"=>    "",
//            "type"=>    "h",
//            "params"=>""
//        );
        return $m;
}
///////////////////////////////////////////////////////////////////////////////
function add_sub_level($array)
{
    foreach($array as $key=>$item)
    {
        $array[$key]['name']=str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;', $item['get_level']).$item['name'];
    }
    return $array;
}
///////////////////////////////////////////////////////////////////////////////
function yes_no($v)
{
    if($v==1)
    {
        return lng('Yes');
    }
    return lng('No');
}
///////////////////////////////////////////////////////////////////////////////
//stripslashes
//array_stripslashes
function array_stripslashes($array)
{
    $tmp = array();
    if(is_array($array))
    {
        foreach($array as $key=>$val)
        {
            $tmp[$key]=array_stripslashes($val);
        }
    }
    else
    {
        return stripslashes($array);
    }
    return $tmp;
}
///////////////////////////////////////////////////////////////////////////////
function arg($name){
    if(!array_key_exists($name, $_REQUEST)){
        return false;
    }
    return is_array($_REQUEST[$name]) ? $_REQUEST[$name] : trim($_REQUEST[$name]);
}
///////////////////////////////////////////////////////////////////////////////
// function create list box, first array: key-value, second active
function option($array, $active=false, $select = 'select', $extra='', $opExtra = null)
{
    ?>

    <select name="<?php echo $select;?>" <?php echo $extra;?>><?php
    foreach($array as $value)
    {
        ?>

        <option<?php
        ?> value="<?php echo $value['id'];?>"<?php echo ((is_array($active)&&in_array($value['id'], $active))|$value['id']==$active ? ' selected="selected"' : '');?>><?php echo $value['name'];?></option><?php
    }
    ?>

    </select><?php
}
///////////////////////////////////////////////////////////////////////////////