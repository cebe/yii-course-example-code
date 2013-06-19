<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $profile
 * @property string $created
 * @property string $updated
 *
 * The followings are the available model relations:
 * @property Posts[] $posts
 */
class User extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
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
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password', 'required'),
			array('username', 'length', 'min' => 3, 'max'=>255),

			array('password', 'matchPassword', 'pw' => 1337),

			array('profile', 'safe', 'on' => 'register'),

			// TODO define dependent validation for employed and company


			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, username, password, profile, created, updated', 'safe', 'on'=>'search'),
		);
	}

	public function matchPassword($attribute, $params)
	{
		if ($this->$attribute != $params['pw']) {
			$this->addError($attribute, 'You need to specify a good password!<br/>Hint: ' . $params['pw'] . ' might be a good one.');
		}
	}


	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
			'posts' => array(self::HAS_MANY, 'Posts', 'authorId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => Yii::t('app', 'Username'),
			'password' => 'Password',
			'profile' => 'Profile',
			'created' => 'Created',
			'updated' => 'Updated',
		);
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

		$criteria->compare('id',$this->id);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('profile',$this->profile,true);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('updated',$this->updated,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}