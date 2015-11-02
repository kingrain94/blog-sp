<?php
/**
 * Created by PhpStorm.
 * User: Nguyen
 * Date: 10/30/2015
 * Time: 10:58 PM
 */

namespace frontend\controllers;


use yii\web\Controller;

class ScheduleController extends Controller
{
    public function actionShow()
    {
        return $this->render('show');
    }
}