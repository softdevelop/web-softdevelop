<?php
class weekReport extends CWidget{
        
        public $actionPrefix = 'test.';
        
       // now is an action provider 
        public static function actions(){
                return array(
                   'GetData'=>'application.components.actions.getData',
                );
        }
}