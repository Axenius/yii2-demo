<?php
/**
 * Created by PhpStorm.
 * User: xenius
 * Date: 21.01.17
 * Time: 2:08
 */

namespace frontend\models;


use yii\base\Model;

class LoginForm extends Model
{
    public $username;
    public $password;

    public function rules()
    {
        return [
            ['username', 'required'],
            ['username', 'string', 'min' => 5, 'max' => 10],

            ['password', 'required'],
            ['password', 'string', 'min' => 2, 'max' => 12],
            ['password', 'validateUser']
        ];
    }

    public function validateUser($attribute, $params)
    {
        if(!$this->hasErrors())  // если нет ошибок в валидации
        {
            $user = $this->getUser();  // получаем пользователя для дальнейшего сравнения пароля

            if(!$user || !$user->validatePassword($this->password))  // если нет пользователя или не совпадает пароль
            {
                $this->addError($attribute, 'Пароль или имя пользователя введены неверно');  // выводим ошибку
            }
        }

    }

    public function getUser()  // получаем пользователя по введеному юзернейму
    {
        return User::findOne(['username' => $this->username]);
    }

}