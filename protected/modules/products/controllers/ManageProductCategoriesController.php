<?php

class ManageProductCategoriesController extends TreeController {

	public $layout = '//layouts/main';
	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'ProductCategory'),
		));
	}
	
	public $CQtreeGreedView  = array (
        'modelClassName' => 'ProductCategory', //название класса
        'adminAction' => 'manageByTree' //action, где выводится QTreeGridView. Сюда будет идти редирект с других действий.
    );
    public function behaviors()
    {
        return array(
            //'jsTreeBehavior' => array('class' => 'application.behaviors.JsTreeBehavior',
            'jsTreeBehavior' => array('class' => 'ext.treeview.JsTreeBehavior',
                'modelClassName' => 'ProductCategory',
                'form_alias_path' => 'application.modules.products.views.manageProductCategories._formTree',
                'view_alias_path' => 'application.modules.products.views.manageProductCategories.view',
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
	/*
	public function actionFetchTree()
    {
        self::printULTree();
    }
	
	public function printULTree()
    {
        //$categories = CActiveRecord::model($this->modelClassName)->findAll(array('order' => 'root,lft'));
        $categories = CActiveRecord::model($this->modelClassName)->findAll(array('order' => 'lft'));
        $level = 0;
        foreach ($categories as $n => $category) {

            if ($category->level == $level)
                echo CHtml::closeTag('li') . "\n";
            else if ($category->level > $level)
                echo CHtml::openTag('ul') . "\n";
            else {
                echo CHtml::closeTag('li') . "\n";

                for ($i = $level - $category->level; $i; $i--) {
                    echo CHtml::closeTag('ul') . "\n";
                    echo CHtml::closeTag('li') . "\n";
                }
            }

            echo CHtml::openTag('li', array('id' => 'node_' . $category->primaryKey, 'rel' => $category->getAttribute($this->rel_property)));
            echo CHtml::openTag('a', array('href' => '#'));
            echo CHtml::encode($category->getAttribute($this->label_property));
            echo CHtml::closeTag('a');

            $level = $category->level;
        }

        for ($i = $level; $i; $i--) {
            echo CHtml::closeTag('li') . "\n";
            echo CHtml::closeTag('ul') . "\n";
        }

    }
	
	
	*/
	/*
	public function actionCreate() {
		$model = new ProductCategory;


		if (isset($_POST['ProductCategory'])) {
			$model->setAttributes($_POST['ProductCategory']);

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
		$model = $this->loadModel($id, 'ProductCategory');


		if (isset($_POST['ProductCategory'])) {
			$model->setAttributes($_POST['ProductCategory']);

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
			$this->loadModel($id, 'ProductCategory')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}
	*/
	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('ProductCategory');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new ProductCategory('search');
		$model->unsetAttributes();
		
		if (isset($_GET['ProductCategory']))
			$model->setAttributes($_GET['ProductCategory']);

		$this->render('admin', array(
			'model' => $model,
		));
	}
	public function actionManageByTree() {
		$model=new ProductCategory('search');
        $dataProvider=new CActiveDataProvider('ProductCategory');
 
        $criteria = new CDbCriteria();
 
        $model->unsetAttributes();  // clear any default values
        if(isset($_GET['ProductCategory'])){
			foreach($_GET['ProductCategory'] as $key=>$value) {
				$criteria -> compare($key, $value, true, 'AND');
			}
			$dataProvider = new CActiveDataProvider('ProductCategory', array('criteria' => $criteria));
        }
 
        $this->render('managebytree',array(
            'model'=>$model,'dataProvider'=>$dataProvider
        ));

	}
	public function actionTree() {
		
		$this->render('tree');
	}
	
	public function loadModelCategories($id)
    {
        $model = Category::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }
	public function loadModel($id)
    {
        $model = ProductCategory::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

}