<?php

/**
 * This is the model class for table "{{hole_fixeds}}".
 *
 * The followings are the available columns in table '{{hole_fixeds}}':
 * @property integer $hole_id
 * @property integer $user_id
 * @property integer $date_fix
 * @property string $comment
 */
class HoleFixeds extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return HoleFixeds the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{hole_fixeds}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('hole_id, user_id, date_fix', 'required'),
			array('hole_id, user_id, date_fix, createdate', 'numerical', 'integerOnly'=>true),
			array('comment', 'length'),
         
         array('date_fix', 'compare', 'compareValue'=>time(), 'operator'=>'<', 'allowEmpty'=>false , 
            'message'=>Yii::t('template', 'DATE_CANT_BE_FUTURE'),
         ),
//         array('date_fix', 'compare', 'compareValue'=>time() - (7 * 86400), 'operator'=>'>', 'allowEmpty'=>false , 
//            'message'=>Yii::t('template', 'DATE_CANT_BE_PAST'),
//         ),           
         array('date_fix', 'compare', 'compareAttribute'=>'createdate', 'operator'=>'>', 'allowEmpty'=>false , 
            'message'=>Yii::t('template', 'DATE_CANT_BE_PAST'),
         ),           
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('hole_id, user_id, date_fix, comment', 'safe', 'on'=>'search'),
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
         'user'=>array(self::BELONGS_TO, 'UserGroupsUser', 'user_id'),		
         'hole'=>array(self::BELONGS_TO, 'Holes', 'hole_id'),		
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'hole_id' => Yii::t('template', 'HOLE'),
			'user_id' => Yii::t('template', 'USER'),
			'date_fix' => Yii::t('template', 'FIXDATE'),
			'comment' => Yii::t('template', 'COMMENT'),
		);
	}
   
	public function beforeSave(){
		parent::beforeSave();
      if ($this->isNewRecord){
         $this->createdate = time();   
      }
		return true;
	}   		   

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('hole_id',$this->hole_id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('date_fix',$this->date_fix);
		$criteria->compare('comment',$this->comment,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}