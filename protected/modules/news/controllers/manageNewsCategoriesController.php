<?php

class ManageNewsCategoriesController extends BController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'NewsCategories'),
		));
	}

	public function actionCreate() {
		$model = new NewsCategories;


		if (isset($_POST['NewsCategories'])) {
			$model->setAttributes($_POST['NewsCategories']);

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
		$model = $this->loadModel($id, 'NewsCategories');


		if (isset($_POST['NewsCategories'])) {
			$model->setAttributes($_POST['NewsCategories']);

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
			$this->loadModel($id, 'NewsCategories')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('NewsCategories');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new NewsCategories('search');
		$model->unsetAttributes();

		if (isset($_GET['NewsCategories']))
			$model->setAttributes($_GET['NewsCategories']);

		$this->render('admin', array(
			'model' => $model,
		));
	}
	public function loadModel($id)
    {
        $model = NewsCategories::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

}