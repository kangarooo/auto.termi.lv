<?php
/////////////////////////////////////////////////////////////////
defined( '_V' ) or die( 'Restricted access' );
/////////////////////////////////////////////////////////////////
$editNavigation = array(
    'model'=>array(
        'ordering' => array('mark_id'=>'ASC', 'order'=>'ASC', 'name'=>'ASC')
        ,'view_fields' => array(
                'id'=>array(
                        'type'=>'editLink'
                )
                , 'name'=>array(
                        'type'=>'editLink'
                )
                , 'mark_id'=>array(
			'type'=>'link',
                        'possible'=>getMarks()
                )
                , 'auto'=>array(
                        'type'=>'outLink'
                        , 'urlTemplate'=>$wwwPathAdmin.'/auto/?model_id=%id%'
                )
                , 'order'=>array(
                        'type'=>'textAll'
                )
                , 'published'=>array(
                        'type'=>'yesno'
                )
                , 'delete'=>array(
                        'type'=>'delete'
                        ,'function'=>'onModelDelete'
                )
        )
        ,'edit_fields' => array(
                'id' => array(
                        'type'=>'hidden'
                ),
                'name' => array(
                        'type' => 'text'
                        ,'function' => 'escArgHtml'
                )
                , 'mark_id' => array(
                        'type'=>'option'
                        , 'possible'=>getMarks()
                )
        )
    )
    , 'auto'=>array(
        'ordering' => array('added'=>'DESC')
        ,'view_fields' => array(
                'id'=>array(
                        'type'=>'editLink'
                )
                , 'added'=>array(
                        'type'=>'editLink'
                )
                , 'model_id'=>array(
			'type'=>'link',
                        'possible'=>getModels()
                )
                , 'year', 'engine', 'engine_type', 'gearbox', 'gear_type', 'drive_type'
                , 'mileage', 'tehpassport_is', 'tehpassport', 'car_type', 'place', 'color', 'price', 'currency'
                , 'telephone'
                , 'delete'=>array(
                        'type'=>'delete'
                        ,'function'=>'onAutoDelete'
                )
        )
        ,'edit_fields' => array(
                'id' => array(
                        'type'=>'hidden'
                )
                , 'model_id'=>array(
			'type'=>'option',
                        'possible'=>getModels()
                )
//                , 'year'=> array(
//                    'type'=>'text'
//                )
//                , 'engine'=> array(
//                    'type'=>'text'
//                )
//                , 'engine_type'=> array(
//                    'type'=>'text'
//                )
//                , 'gearbox'=> array(
//                    'type'=>'text'
//                )
//                , 'gearbox_type'=> array(
//                    'type'=>'text'
//                )
//                , 'drive_type'=> array(
//                    'type'=>'text'
//                )
//                , 'mileage_type'=> array(
//                    'type'=>'text'
//                )
//                , 'mileage_type'=> array(
//                    'type'=>'text'
//                )
                
        )
    )
);
