<?php
/**
 * Created by PhpStorm.
 * User: Nguyen
 * Date: 10/11/2015
 * Time: 9:53 PM
 */

namespace frontend\models;


use common\models\Post;
use yii\base\Model;

class PostEditForm extends Model
{
    public $id;
    public $title;
    public $content;
    public $permit;
    public $date;
    public $user_id;

    public function rules()
    {
        return [
            [['title', 'content', 'permit'], 'required'],
            ['title', 'string', 'min' => 5, 'max' => 100],
            ['content', 'string', 'min' => 5, 'max' => 1000],
            ['permit', 'integer', 'min' => 1, 'max' => 4],
        ];
    }

    public static function cacheCurrentPostInfo($currentPost)
    {
        $model = new PostEditForm();
        $model->user_id = $currentPost['user_id'];
        $model->id = $currentPost['id'];
        $model->title = $currentPost['title'];
        $model->content = $currentPost['content'];
        $model->permit[0] = $currentPost['permit'];
        $model->date = $currentPost['date'];

        return $model;
    }

    public function editPost($editPost)
    {
        $editPost['title'] = $this->title;
        $editPost['content'] = $this->content;
        $editPost['permit'] = $this->permit[0];
        $editPost['date'] = $this->date;
        $editPost['user_id'] = $this->user_id;
        $editPost->save();
    }
}