<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;

class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password'], 'required'],
            [['authKey', 'accessToken'], 'string'],
            [['created'], 'safe'],
            [['admin'], 'integer'],
            [['username', 'password', 'email'], 'string', 'max' => 128]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'authKey' => 'Auth Key',
            'accessToken' => 'Access Token',
            'created' => 'Created',
            'admin' => 'Admin',
            'email' => 'Email',
        ];
    }

    /**
     * @inheritdoc
     */
    public static function findIdentity($id) {
        $dbUser = User::find()
                ->where([
                    "id" => $id
                ])
                ->one();
        if (!count($dbUser)) {
            return null;
        }
        return new static($dbUser);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $userType = null) {
        $dbUser = User::find()
                ->where(["accessToken" => $token])
                ->one();
        if (!count($dbUser)) {
            return null;
        }
        return new static($dbUser);
    }

    /**
     * Finds user by username
     *
     * @param  string      $username
     * @return static|null
     */
    public static function findByUsername($username) {
        $dbUser = User::find()
                ->where([
                    "username" => $username
                ])
                ->one();
        if (!count($dbUser)) {
            return null;
        }
        return new static($dbUser);
    }

    /**
     * Finds user by email
     *
     * @param  string      $email
     * @return static|null
     */
    public static function findByEmail($email) {
        $dbUser = User::find()
                ->where([
                    "email" => $email
                ])
                ->one();
        if (!count($dbUser)) {
            return null;
        }
        return new static($dbUser);
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param  string  $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return (Yii::$app->getSecurity()->validatePassword($password, $this->password));
    }

    /**
     * Before saving the record
     *
     * @param  boolean $insert Whether this method called while inserting a record. If false, it means the method is called while updating a record.
     * @return boolean Whether the insertion or updating should continue. If false, the insertion or updating will be cancelled.
     */
    public function beforeSave($insert) {
        if (parent::beforeSave($insert)) {
            if (strlen($this->password) < 59)      
                $this->password = Yii::$app->getSecurity()->generatePasswordHash($this->password);
            return true;
        } else {
            return false;
        }
    }

    public function getAccount()
    {
        return Account::find()->where(['user' => $this->id])
            ->andWhere(['active' => true])
            ->one();
    }
}
