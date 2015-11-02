<?php
/**
 * Created by PhpStorm.
 * User: Nguyen
 * Date: 10/10/2015
 * Time: 3:00 PM
 */
namespace frontend\controllers;

use common\models\Like;
use common\models\Post;
use frontend\models\PostCreateForm;
use frontend\models\PostEditForm;
use Yii;
use yii\helpers\Url;
use yii\web\Controller;

class PostController extends Controller
{
    public function actionCreate()
    {
        if (Yii::$app->user->isGuest) {
            $this->redirect(Url::to(['/site/login']));
        }

        $model = new PostCreateForm();
        $model->user_id = Yii::$app->user->getId();
        $model->date = date('Y-d-m h:i:s');

        if ($model->load(Yii::$app->request->post())) {
            $model->createPost();
            $this->redirect('?r=post/show-all');
        }

        return $this->render('create', [
            'model'=> $model,
        ]);
    }

    public function actionEdit($id)
    {
        if (Yii::$app->user->isGuest) {
            $this->redirect(Url::to(['/site/login']));
        }

        $currentPost = Post::getPostById($id);

        if ($currentPost['user_id'] == Yii::$app->user->getId()) {
            $model = PostEditForm::cacheCurrentPostInfo($currentPost);

            if ($model->load(Yii::$app->request->post())) {
                $model->editPost($currentPost);
                $this->redirect(Url::to(['/post/show-all']));
            }
            return $this->render('edit', [
                'model' => $model,
            ]);
        } else {
            // not post of current user
        }
    }

    public function actionDelete()
    {
        if (Yii::$app->user->isGuest) {
            $this->redirect(Url::to(['/site/login']));
        }

        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            Post::findOne(['id' => $id])->delete();
        }
    }

    public function actionShowAll()
    {
        if (Yii::$app->user->isGuest) {
            $this->redirect(Url::to(['/site/login']));
        }

        $list_post = Post::find()
            ->where(['user_id' => Yii::$app->user->getId()])
            ->asArray()
            ->orderBy('date')
            ->all();

        return $this->render('show', ['model' => $list_post]);
    }

    public function actionDetail($id)
    {
        $model = Post::getPostById($id);
        return $this->render('detail', ['model' => $model]);
    }

    public function actionLike()
    {
        if (Yii::$app->user->isGuest) {
            $this->redirect(Url::to(['/site/login']));
        }

        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            Like::addLike($id, Yii::$app->user->getId());
        }
    }
}