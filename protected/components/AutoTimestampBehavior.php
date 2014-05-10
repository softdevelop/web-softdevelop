<?php
class AutoTimestampBehavior extends CActiveRecordBehavior {
 
    /**
    * The field that stores the creation time
    */
    public $created = 'created';
    /**
    * The field that stores the modification time
    */
    public $modified = 'modified';
 
 
    public function beforeValidate($on) {
        if ($this->Owner->isNewRecord) {
            //$this->Owner->{$this->created} = new CDbExpression('NOW()');
            $this->Owner->{$this->created} = date( 'Y-m-d H:i:s' );
        }
		//$this->Owner->{$this->modified} = new CDbExpression('NOW()');
		if(isset($this->Owner->{$this->modified}))
		//if(isset($this->Owner->{$this->modified}) || empty($this->Owner->{$this->modified}))
			$this->Owner->{$this->modified} = date( 'Y-m-d H:i:s' );
 
        return true;    
    }
}