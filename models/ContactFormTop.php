<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactFormTop extends Model
{
    public $name;
    public $email;
    public $phone;
    public $subject;
    public $body;
    public $verifyCode;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            [['name', 'phone', 'body'], 'string'],
            // verifyCode needs to be entered correctly
            //['verifyCode', 'captcha'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            //'verifyCode' => 'Проверочный код',
            'name' => 'Имя',
            'email' => 'Email',
            'phone' => 'Телефон',
            //'subject' => 'Тема',
            'body' => 'Сообщение',
        ];
    }
	


    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
     */
    public function contact($email)
    {
        if ($this->validate()) {
            Yii::$app->mailer->compose('emailfromguest', ['namefrom' => $this->name, 'emailfrom' => $this->email, 'phonefrom' => $this->phone, 'bodyfrom'=>$this->body])
                ->setTo($email)
                ->setFrom(['oc.mcdir@yandex.ru' => $this->name])
				->setReplyTo($this->email)
                //->setSubject($this->subject)
                ->setTextBody($this->body)
                ->send();

            return true;
        }
        return false;
    }
}
