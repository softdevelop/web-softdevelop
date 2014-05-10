<?php

class Create extends CAction {

    public function run() {
        $modelClassName = $this->getController()->CQtreeGreedView['modelClassName'];
        $model = new $modelClassName();
	
        if (!empty($_POST) && $_POST[$this->getController()->CQtreeGreedView['modelClassName']]) {
            $model->attributes = $_POST[$this->getController()->CQtreeGreedView['modelClassName']];

            try {
                //if ($model->tree->hasManyRoots == true) {
                if (!$model->parent_id) {
                    if($model->saveNode()) {
                        $this->getController()->redirect(array($this->getController()->CQtreeGreedView['adminAction']));
                    }
                } else {
                    //$root = CActiveRecord::model($modelClassName)->roots()->find();	x
					//$root = {$modelClassName}::model()->findByPk($model->parent_id);
					$root = CActiveRecord::model($modelClassName)->findByPk($model->parent_id);
                    if ($root && $model->appendTo($root)) {
                        $this->getController()->redirect(array($this->getController()->CQtreeGreedView['adminAction']));
                    }
                }
            } catch (Exception $e) {
                $model->addError("CQTeeGridView", $e->getMessage());
            }
        }

        $this->getController()->render('create', array(
            'model' => $model,
        ));
    }
}
?>
