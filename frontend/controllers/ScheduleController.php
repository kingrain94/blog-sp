<?php
/**
 * Created by PhpStorm.
 * User: Nguyen
 * Date: 10/30/2015
 * Time: 10:58 PM
 */

namespace frontend\controllers;


use frontend\models\EventCreateForm;
use yii\web\Controller;

class ScheduleController extends Controller
{
    public $enableCsrfValidation = false;

    public function actionShow()
    {
        return $this->render('show');
    }

    public function actionCreateEvent()
    {
        $model = new EventCreateForm();
        $model->own_id = \Yii::$app->user->getId();
        $model->create_at = date('Y-m-d h:i');

        if ($model->load(\Yii::$app->request->post())) {
            $model->addEvent();
            $this->refresh();
        }

        return $this->render('show', ['model' => $model]);
    }
}