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

class PostCreateForm extends Model
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
            [['title', 'content', 'permit', 'date'], 'required'],
            ['title', 'string', 'min' => 5, 'max' => 100],
            ['content', 'string', 'min' => 5],
            ['permit', 'integer', 'min' => 1, 'max' => 4],
            ['date', 'date']
        ];
    }

    public function createPost() {
        $newPost = new Post();
        $newPost['title'] = $this->title;
        $newPost['content'] = $this->content;
        $newPost['permit'] = $this->permit[0];
        $newPost['date'] = $this->date;
        $newPost['user_id'] = $this->user_id;
        $newPost->save();
    }
}