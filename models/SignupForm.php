<?php

namespace app\models;

use yii\base\Model;

class SignupForm extends Model
{
    public $name;
    public $email;
    public $password;
    

    public function rules()
    {
        return [
            ['name', 'required', 'message' => 'Необходимо заполнить «Логин».'],
            ['email', 'required', 'message' => 'Необходимо заполнить «E-mail».'],
            ['password', 'required', 'message' => 'Необходимо заполнить «Пароль».'],
            ['email','email'],
            [['name'], 'string'],
            [['email'], 'email'],
            [['email'], 'unique', 'targetClass'=>'app\models\User', 'targetAttribute'=>'email']
        ];
    }

    public function signup()
    {
        if($this->validate())
        {
            $user = new User();
            $user->attributes = $this->attributes;
            return $user->create();
        }
    }
}