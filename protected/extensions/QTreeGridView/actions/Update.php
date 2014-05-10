<?php

class Update extends CAction {

    public function run($id) {
        $modelClassName = $this->getController()->CQtreeGreedView['modelClassName'];
        $model = CActiveRecord::model($modelClassName)->findByPk((int) $id);
        if($model===null) {
            $this->getController()->redirect(array($this->getController()->CQtreeGreedView['adminAction']));
        }

        if(isset($_POST[$this->getController()->CQtreeGreedView['modelClassName']]))
        {
			if($model->parent_id != $_POST[$modelClassName]['parent_id']) {
				//$new_parent = $modelClassName::model()->findByPk($_POST[$modelClassName]['parent_id']);
				$new_parent = CActiveRecord::model($modelClassName)->findByPk($_POST[$modelClassName]['parent_id']);
				//$model->moveAsFirst($new_parent);
				$model->moveAsLast($new_parent);
			}
			$model->attributes = $_POST[$modelClassName];
			if($model->saveNode()) {
				$this->getController()->redirect(array($this->getController()->CQtreeGreedView['adminAction']));
			}
        }

        $this->getController()->render('update',array(
            'model'=>$model,
        ));
    }
}
?>
