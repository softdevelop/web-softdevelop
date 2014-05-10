<?php

/**
 * This is the model class for table "{{news}}".
 *
 * The followings are the available columns in table '{{news}}':
 * @property integer $id
 * @property string $title
 * @property string $alias
 * @property string $image
 * @property string $description
 * @property string $content
 * @property integer $priority
 * @property integer $is_published
 * @property string $create_time
 * @property string $update_time
 *  @property string $news_time
 *
 * The followings are the available model relations:
 * @property NewsMiddle[] $newsMiddles
 */
class News extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{news}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title', 'required'),
			array('priority, is_published', 'numerical', 'integerOnly'=>true),
			array('title, image', 'length', 'max'=>128),
			array('alias', 'length', 'max'=>64),
			array('description, content, create_time, update_time, news_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, alias, image, description, content, priority, is_published, create_time, update_time, news_time', 'safe', 'on'=>'search'),
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
			'newsMiddles' => array(self::HAS_MANY, 'NewsMiddle', 'news_id'),
			'categories'=>array(self::MANY_MANY, 'NewsCategories','sd_news_middle(news_id, category_id)'),
		);
	}
	public function behaviors(){
		return array(
			'CTimestampBehavior' => array(
				'class' => 'zii.behaviors.CTimestampBehavior',
				'createAttribute' => 'create_time',
				'updateAttribute' => 'update_time',
			),
			'SlugBehavior' => array(
				'class' => 'application.models.behaviors.SlugBehavior',
				'slug_col' => 'alias',
				'title_col' => 'title',
				//'max_slug_chars' => 125,
			)
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
			'priority' => 'Priority',
			'is_published' => 'Is Published',
			'create_time' => 'Create Time',
			'update_time' => 'Update Time',
			'news_time' => 'News Time',
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
		$criteria->compare('priority',$this->priority);
		$criteria->compare('is_published',$this->is_published);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('news_time',$this->news_time,true);

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
	public function searchByCategory($category_id)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;
		$criteria->with=array('categories');
        $criteria->together = true;
		$criteria->compare('id',$this->id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('alias',$this->alias,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('priority',$this->priority);
	//	$criteria->compare('categories.category_id',$category_id,true);
		$criteria->compare('is_published',$this->is_published);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('news_time',$this->news_time,true);
		//$criteria->compare('categories.name', NewsCategories::model()->name);
		//$criteria->compare('categories.alias', NewsCategories::model()->alias);
		//$criteria->addCondition('`categories`.`id` = :id');
		//$criteria->params = array(':id' => $category_id);
		$criteria->compare("'categories'.'id'", $category_id);
		//$criteria->addCondition('sd_news_categories.id = '.$category_id);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return News the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
