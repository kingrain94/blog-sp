<?php
/**
 * Created by PhpStorm.
 * User: Nguyen
 * Date: 11/12/2015
 * Time: 5:20 PM
 */

namespace frontend\models;


use common\models\Message;
use common\models\User;
use yii\base\Model;

class MessageCreateForm extends Model
{
    public $subject;
    public $content;
    public $create_at;
    public $status;
    public $sender_id;
    public $receiver;

    public function rules()
    {
        return [
            ['subject', 'required'],
            ['subject', 'string', 'max' => 100],
            ['content', 'string', 'max' => 1000],
            ['status', 'integer'],
        ];
    }

    public function addMessage()
    {
        foreach ($this->receiver as $username) {
            $message = new Message();
            $message['subject'] = $this->subject;
            $message['content'] = $this->content;
            $message['create_at'] = $this->create_at;
            $message['status'] = $this->status;
            $message['sender_id'] = $this->sender_id;
            $message['receiver_id'] = User::findOne(['username' => $username])->id;
            $message->save();
        }
    }
}