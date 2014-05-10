<?php

/**
 * This is the model class for table "{{Static_pages}}".
 *
 * The followings are the available columns in table '{{Static_pages}}':
 * @property integer $id
 * @property string $title
 * @property string $alias
 * @property string $image
 * @property string $description
 * @property string $content
 * @property string $position
 * @property string $section
 * @property boolean $show_on_index
 * @property integer $priority
 * @property string $create_time
 * @property string $update_time
 * @property integer $is_published
 */
class StaticPage extends GxActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{Static_pages}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, alias', 'required'),
			array('title', 'length', 'max'=>255, 'on'=>'insert,update'),
			array('priority, is_published', 'numerical', 'integerOnly'=>true),
			array('title, alias, image, position, section', 'length', 'max'=>128),
			array('description, content, show_on_index, create_time, update_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, alias, image, description, content, position, section, show_on_index, priority, create_time, update_time, is_published', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => 'Title',
			'alias' => 'Alias',
			'image' => 'Image',
			'description' => 'Description',
			'content' => 'Content',
			'position' => 'Position',
			'section' => 'Section',
			'show_on_index' => 'Show On Index',
			'priority' => 'Priority',
			'create_time' => 'Create Time',
			'update_time' => 'Update Time',
			'is_published' => 'Is Published',
		);
	}
	public function behaviors(){
		return array(
			'CTimestampBehavior' => array(
				'class' => 'zii.behaviors.CTimestampBehavior',
				'createAttribute' => 'create_time',
				'updateAttribute' => 'update_time',
			)
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('alias',$this->alias,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('position',$this->position,true);
		$criteria->compare('section',$this->section,true);
		$criteria->compare('show_on_index',$this->show_on_index);
		$criteria->compare('priority',$this->priority);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('is_published',$this->is_published);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort'=>array(
				'defaultOrder'=>'priority ASC',
				'multiSort' =>true,
				'attributes' => array(
					'rating'=> array(
						'DESC' => 'create_time'
					)
				)
			),
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return StaticPages the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
