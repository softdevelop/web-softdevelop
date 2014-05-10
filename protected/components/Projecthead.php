<?php
Yii::import('application.modules.Projects.models.Project');

class Projecthead extends CWidget
{
    /**
     * @var CFormModel
     */
    public $form;
	public function init()
	{
		parent::init();
	}
    public function run()
    {
        $project = Project::model()->findAll();
        $this->render('project', array('project'=>$project));
    }
}