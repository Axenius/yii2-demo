<?php

namespace frontend\models;

use frontend\models\User;
use yii\base\Model;

class SignupForm extends Model
{
    public $username;
    public $password;
    public $email;

    public function rules()
    {
        return [
            [['username', 'email', 'password'], 'required'],

            ['password', 'string', 'min' => 2, 'max' => 12],

            ['username', 'string', 'min' => 5, 'max' => 10],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Данное имя пользователя уже занято.'],

            ['email', 'email'],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Данный почтовый адресс уже занят.']
        ];
    }

    public function signup()
    {
        $user = new User();

        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);

        return $user->save();
    }
}