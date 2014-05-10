<?php

class ManageServiceCategoryController extends TreeController {

	public $layout='//layouts/main';
	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'ServiceCategory'),
		));
	}
	
	public $CQtreeGreedView  = array (
        'modelClassName' => 'ServiceCategory', //название класса
        'adminAction' => 'manageByTree' //action, где выводится QTreeGridView. Сюда будет идти редирект с других действий.
    );
    public function behaviors()
    {
        return array(
            //'jsTreeBehavior' => array('class' => 'application.behaviors.JsTreeBehavior',
            'jsTreeBehavior' => array('class' => 'ext.treeview.JsTreeBehavior',
                'modelClassName' => 'ServiceCategory',
                'form_alias_path' => 'application.modules.products.views.manageServiceCategory._formTree',
                'view_alias_path' => 'application.modules.products.views.manageServiceCategory.view',
                'label_property' => 'name',
                'rel_property' => 'name'
            )
        );
    }
	
	public function actions() {
        return array (
            'create'=>'ext.QTreeGridView.actions.Create',
            'update'=>'ext.QTreeGridView.actions.Update',
            'delete'=>'ext.QTreeGridView.actions.Delete',
            'moveNode'=>'ext.QTreeGridView.actions.MoveNode',
            'makeRoot'=>'ext.QTreeGridView.actions.MakeRoot',
        );
    }
	
	public function actionTree() {
		
		$this->render('tree');
	}
	
	public function actionCreate() {
		$model = new ServiceCategory;


		if (isset($_POST['ServiceCategory'])) {
			$model->setAttributes($_POST['ServiceCategory']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'ServiceCategory');


		if (isset($_POST['ServiceCategory'])) {
			$model->setAttributes($_POST['ServiceCategory']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'ServiceCategory')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('ServiceCategory');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new ServiceCategory('search');
		$model->unsetAttributes();

		if (isset($_GET['ServiceCategory']))
			$model->setAttributes($_GET['ServiceCategory']);

		$this->render('admin', array(
			'model' => $model,
		));
	}
	public function loadModel($id)
    {
        $model = ServiceCategory::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

}