<?php
namespace frontend\controllers;
use common\models\Relationship;
use common\models\User;
use Yii;
use yii\web\Controller;

/**
 * Created by PhpStorm.
 * User: Nguyen
 * Date: 10/13/2015
 * Time: 4:53 PM
 */

class RelationshipController extends Controller
{
    public function actionSendFriendRequest($user_id_1, $user_id_2)
    {

    }

    public function actionAcceptFriendRequest($user_id_1, $user_id_2)
    {

    }

    public function actionShowListFriend()
    {
        $user_id = Yii::$app->user->getId();

        $sql = 'SELECT * FROM relationship WHERE (user_id_1=:user_id OR user_id_2=:user_id) AND status=1';
        $arrRelationship = Relationship::findBySql($sql, [':user_id' => $user_id])->asArray()->all();

        $model = array();
        foreach ($arrRelationship as $relationship) {
            if ($relationship['user_id_1'] == $user_id) {
                array_push($model, User::findOne(['id' => $relationship['user_id_2']]));
            } else {
                array_push($model, User::findOne(['id' => $relationship['user_id_1']]));
            }
        }

        return $this->render('show-friend', ['model' => $model]);
    }
}