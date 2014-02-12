<?php

/**
 * This is the model class for table "user_info".
 *
 * The followings are the available columns in table 'user_info':
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $mobile
 * @property string $dob
 * @property string $image
 * @property integer $status
 * @property string $date_time
 * @property integer $state_id
 * @property integer $user_master_id
 * @property integer $university_id
 *
 * The followings are the available model relations:
 * @property State $state
 * @property UserMaster $userMaster
 * @property University $university
 */
class UserInfo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user_info';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, email, state_id, user_master_id, university_id', 'required'),
			array('status, state_id, user_master_id, university_id', 'numerical', 'integerOnly'=>true),
			array('name, email, mobile, image', 'length', 'max'=>45),
			array('dob, date_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, email, mobile, dob, image, status, date_time, state_id, user_master_id, university_id', 'safe', 'on'=>'search'),
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
			'state' => array(self::BELONGS_TO, 'State', 'state_id'),
			'userMaster' => array(self::BELONGS_TO, 'UserMaster', 'user_master_id'),
			'university' => array(self::BELONGS_TO, 'University', 'university_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'email' => 'Email',
			'mobile' => 'Mobile',
			'dob' => 'Dob',
			'image' => 'Image',
			'status' => 'Status',
			'date_time' => 'Date Time',
			'state_id' => 'State',
			'user_master_id' => 'User Master',
			'university_id' => 'University',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('dob',$this->dob,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('date_time',$this->date_time,true);
		$criteria->compare('state_id',$this->state_id);
		$criteria->compare('user_master_id',$this->user_master_id);
		$criteria->compare('university_id',$this->university_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UserInfo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}