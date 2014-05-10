<?php

class StaticpageController extends BController
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	//public $layout='//layouts/column2';
	public $layout = '//layouts/main';
	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			//'postOnly + delete', // we only allow deletion via POST request
		);
	}
	
	public function actions(){
		return array(
				'test.'=>'application.components.weekReport',
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin', 'delete' , 'ajaxupdate','ajaxactive' ,'TestWidget', 'test.GetData', 'test'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new StaticPage;
		//echo Yii::app()->controller->id; exit;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		
		if(isset($_POST['StaticPage']))
		{
			$model->attributes=$_POST['StaticPage'];
			
			
			$model->setAttributes($_POST['Banner']);
			//dump($model);exit;
			$fileUpload = CUploadedFile::getInstance($model, 'image');
			//dump(CUploadedFile::getInstance($model, 'image'));exit;
			if (isset($fileUpload)) {
				list($width, $height, $type, $attr) = getimagesize($fileUpload->getTempName());
				
					$uploadPath = YiiBase::getPathOfAlias('webroot') . Yii::app()->controller->module->image['url']; 
					if (!is_dir($uploadPath))
						mkdir($uploadPath,0777,true);
					
					$filename = time(). $fileUpload->getName(); //time() . mt_rand(0, 0xfff) . '.' . $fileUpload->getExtensionName();
					$fileUpload->saveAs($uploadPath . $filename);
					//CVarDumper::dump($uploadPath . $filename, 3, true);	exit;

					//Create lager and thumbnail image
					Yii::import('ext.phpthumb.EasyPhpThumb');
					$thumbsPath = $uploadPath;

					// thumbnails image
					$thumbs = new EasyPhpThumb();
					$thumbs->init();
					$thumbs->setThumbsDirectory($thumbsPath);
					$thumbs->load($uploadPath . $filename)
							->resize(Yii::app()->controller->module->image['thumbnail']['width'], 
											 Yii::app()->controller->module->image['thumbnail']['height']
											)
							->save('thumb_'.$filename);
					
					$model->image = $filename;
					
					if ($model->save()) {
						if (Yii::app()->getRequest()->getIsAjaxRequest())
							Yii::app()->end();
						else
							$this->redirect(array('view', 'id' => $model->id));
					}
				
			}else{
				//$model->addError('image', 'Image banner is emptyss.');
			}
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['StaticPage']))
		{
			$model->attributes=$_POST['StaticPage'];
			$fileUpload = CUploadedFile::getInstance($model, 'image');
			if (isset($fileUpload)) {
				list($width, $height, $type, $attr) = getimagesize($fileUpload->getTempName());
				$uploadPath = YiiBase::getPathOfAlias('webroot') . Yii::app()->controller->module->image['url'];
				//dump ($uploadPath);exit;
				if (!is_dir($uploadPath))
					mkdir($uploadPath,0777,true);
					
				$filename = time(). $fileUpload->getName(); //time() . mt_rand(0, 0xfff) . '.' . $fileUpload->getExtensionName();
				$fileUpload->saveAs($uploadPath . $filename);
				//CVarDumper::dump($uploadPath . $filename, 3, true);	exit;
	
				//Create lager and thumbnail image
				Yii::import('ext.phpthumb.EasyPhpThumb');
				$thumbsPath = $uploadPath;
	
				// thumbnails image
				$thumbs = new EasyPhpThumb();
				$thumbs->init();
				$thumbs->setThumbsDirectory($thumbsPath);
				$thumbs->load($uploadPath . $filename)
				->resize(Yii::app()->controller->module->image['thumbnail']['width'],
						Yii::app()->controller->module->image['thumbnail']['height']
				)
				->save('thumb_'.$filename);
				
				try{
					if(is_file($uploadPath.$model->image)){
						unlink($uploadPath.$model->image);
					}
					if(is_file($uploadPath.'thumb_'.$model->image)){
						unlink($uploadPath.'thumb_'.$model->image);
					}
				}catch (Exception $err){}
				$model->image = $filename;
				}
			
			//echo $model->save().'cc';exit;
			//dump($model);exit;
			/*if(empty($model->image)){
				$model->_attributes->image=$buffer;
			}
			dump ($model);exit; */
			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('StaticPage');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new StaticPage('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['StaticPage']))
			$model->attributes=$_GET['StaticPage'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function actionAjaxactive()
	{
		$id = $_GET['id'];
		//$active = $_GET['active'];
		$model=$this->loadModel($id);
		if ($model->is_published)
			$model->is_published = 0;
		else 
			$model->is_published = 1;
		if ($model->save())
			echo 'ok';
		else 
			throw new Exception("Sorry",500);
	}
	
	public function actionAjaxupdate()
	{
		$act = $_GET['act'];
		//echo $act;exit;
		if($act=='doSortOrder')
		{
			$sortOrderAll = $_POST['priority'];
			if(count($sortOrderAll)>0)
			{
				foreach($sortOrderAll as $menuId=>$priority)
				{
					$model=$this->loadModel($menuId);
					$model->priority = $priority;
					$model->save();
				}
			}
		}
		else
		{
			$autoIdAll = $_POST['autoId'];
			if(count($autoIdAll)>0)
			{
				foreach($autoIdAll as $autoId)
				{
					$model=$this->loadModel($autoId);
					if($act=='doDelete'){
						$image=$model->image;
						if ($model->delete()){
							$uploadPath = YiiBase::getPathOfAlias('webroot') . Yii::app()->controller->module->image['url'];
							if (is_file($uploadPath.'thumb_'.$image)){
								unlink($uploadPath.'thumb_'.$image);
							}
							if (is_file($uploadPath.$image)){
								unlink($uploadPath.$image);
							}
						}
					}
					if($act=='doActive')
						$model->is_published = '1';
					if($act=='doInactive')
						$model->is_published = '0';                
					if($model->save())
						echo 'ok';
					else
						throw new Exception("Sorry",500);
	 
				}
			}
		}
	}
	
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return StaticPage the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=StaticPage::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
	
	public function actionTestWidget(){
		$this->render('widget');
		//$this->widget('components.firstWidget.MyWidget');
	}
	
	public function actionTest(){

		//$baseU = (Yii::app()->getBaseUrl().'/themes/backend/wwwroot/css/'); //exit;
		//Yii::app()->getClientScript()->registerCssFile($baseU.'colorPicker.css');
		//echo 'ddd';
		//exit();
		//$this->widget('components.firstWidget.MyWidget');
		$this->render('test');

	//	$baseU = (Yii::app()->getBaseUrl().'/themes/backend/wwwroot/css/'); //exit;
	//	Yii::app()->getClientScript()->registerCssFile($baseU.'colorPicker.css');
		$valueStart = '2013-11-22 12:53:20';
        $valueEnd = '2013-11-22 12:53:35';
        $criteria = new CDbCriteria();
        
       // $criteria->limit = 1;
       
        $criteria->together = true;
       //$criteria->with = array('categories');
        $criteria->with = array('productMiddles');        
        $criteria->select = array('*');
      //$criteria->condition =  'name = "khuong"';
        $criteria->condition =  't.quantity = "0"';
        
         $criteria->addBetweenCondition('update_time',$valueStart, $valueEnd ); 
        //$criteria->params =  array('name' => 'khuong', 'id' => 2);
         $criteria->order = 't.id DESC'; 
         
       // $criteria->condition = ''
		
        $products = Product::model()->findAll($criteria);
        
        dump($products);
        //exit;
        /*foreach ($products as $key => $product){
            if ($product->productMiddles != null){
                foreach ($product->productMiddles as $key =>$productMiddles){
                    if ($productMiddles !== null)
                        echo $productMiddles->product_id.'<br/>';
                    
               }
           }
           else echo 'test<br/>';
           //dump ($product->productMiddles->product_id);
        } */
        exit;
        
		//$this->widget('components.firstWidget.MyWidget');
		//$this->render('test');

	}
	/**
	 * Performs the AJAX validation.
	 * @param StaticPage $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='static-page-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
