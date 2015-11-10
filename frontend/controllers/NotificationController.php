<?php
/**
 * Created by PhpStorm.
 * User: Nguyen
 * Date: 11/11/2015
 * Time: 1:48 AM
 */

namespace frontend\controllers;


use common\models\RelationshipNotification;
use yii\web\Controller;

class NotificationController extends Controller
{
    public function actionMakeOldRelationshipNotification()
    {
        RelationshipNotification::updateAll(['status' => 1]);
    }
}