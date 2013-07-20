<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		// find the user in the database by username
//		$user = User::model()->findByAttributes(array(
//			'username' => $this->username
//		));

		// nicer way: find the user in the database by username and email
		$user = User::model()->find('username=:name OR email=:name', array(
			':name' => $this->username
		));

		if($user === null) {
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		// IMPORTANT NOTE: of course your password should not be stored
		// as plain text in the DB! Use Hashing for this!
		// As of version 1.1.14 there is a Yii helper for this:
		// http://www.yiiframework.com/doc/api/1.1/CPasswordHelper
		} elseif(!CPasswordHelper::verifyPassword($this->password, $user->password)) {
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		} else {
			$this->errorCode=self::ERROR_NONE;
		}
		return !$this->errorCode;
	}
}