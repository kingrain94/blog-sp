<?php
/**
 * Created by PhpStorm.
 * User: Nguyen
 * Date: 10/10/2015
 * Time: 3:00 PM
 */
namespace frontend\controllers;

use common\models\Comment;
use common\models\Like;
use common\models\Post;
use common\models\User;
use frontend\models\PostCreateForm;
use frontend\models\PostEditForm;
use Yii;
use yii\helpers\Url;
use yii\web\Controller;

class PostController extends Controller
{
    public $enableCsrfValidation = false;

    public function actionCreate()
    {
        if (Yii::$app->user->isGuest) {
            $this->redirect(Url::to(['/site/login']));
        }

        $model = new PostCreateForm();
        $model->user_id = Yii::$app->user->getId();

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

    public function actionComment()
    {
        if (isset($_POST['user_id']) && isset($_POST['post_id']) && isset($_POST['content'])) {
            $comment = new Comment();
            $content['user_id'] = $_POST['user_id'];
            $comment['post_id'] = $_POST['post_id'];
            $comment['content'] = $_POST['content'];
            //$comment['create_at'] = Yii::$app->formatter->asDatetime("Y-m-d");
            $comment->save();

            $user = User::findOne(['id' => $_POST['user_id']]);

            echo '<div class="box-comment">'.
                    '<img class="img-circle img-sm" src="http://localhost/yii2adv-blog/frontend/web/assets/58e3e194/img/user2-160x160.jpg" alt="user image">'.
                    '<div class="comment-text">'.
                      '<span class="username">'.
                        $user['username'].
                        '<span class="text-muted pull-right">'.$comment['create_at'].'</span>'.
                      '</span>'.
                        $comment['content'].
                    '</div>'.
                '</div>';
        } else {
            echo 'NO';
        }
    }
}