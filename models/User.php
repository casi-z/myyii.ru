<?php

namespace app\models;

use app\models\UserDatabase;
use yii\db\ActiveRecord;

class User extends ActiveRecord implements \yii\web\IdentityInterface
{

    public static function tableName(){
        return '{{%user_database}}'; //Указываем из какой таблице берем даныне
    }

    public $id;
    public $username;
    public $password;
    public $authKey;
    public $accessToken;

//    private static $users = UserDatabase::find()->orderBy('id')->all()


    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
//        return isset(UserDatabase::find()->orderBy('id')->all()) ? new static(self::$users[$id]) : null;
       // return UserDatabase::find()->orderBy('id')->all() !== null ? new static(self::$users[$id]) : null;

        return self::findOne($id); // Получаем пользователя по id
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        foreach (UserDatabase::find()->orderBy('id')->all() as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        foreach (UserDatabase::find()->orderBy('id')->all() as $user) {

            if (strcasecmp($user['username'], $username) === 0) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === $password;
    }
}
