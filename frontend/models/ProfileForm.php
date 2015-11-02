<?php
/**
 * Created by PhpStorm.
 * User: Nguyen
 * Date: 10/22/2015
 * Time: 10:19 AM
 */

namespace frontend\models;


use yii\base\Model;

class ProfileForm extends Model
{
    public $fullname;
    public $oldPassword;
    public $newPassword;
    public $education;
    public $location;
    public $job;

    public function rules()
    {
        return [
            ['fullname', 'string'],
            ['oldPassword', 'string', 'min' => 6],
            ['newPassword', 'string', 'min' => 6],
            ['education', 'string'],
            ['location', 'string'],
            ['job', 'string'],
        ];
    }

    public static function cacheCurrentProfile($user)
    {
        $model = new ProfileForm();

        $model->fullname = $user['fullname'];
        $model->education = $user['education'];
        $model->location = $user['location'];
        $model->job = $user['job'];

        return $model;
    }

    public function updateProfile($user)
    {
        $user->fullname = $this->fullname;
        $user->setPassword($this->newPassword);
        $user->education = $this->education;
        $user->location = $this->location;
        $user->save();
    }
}