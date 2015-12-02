<?php
/**
 * Created by PhpStorm.
 * User: Nguyen
 * Date: 10/10/2015
 * Time: 6:57 PM
 */
$this->title = "Bài viết trong ngày";
$this->params['breadcrumbs'][] = $this->title;

$listPost = \common\models\Post::find()->where(['create_at' => date('Y-m-d')])->asArray()->all();
?>

<ul class="timeline">

    <li class="time-label">
        <span class="bg-red">
            <?= date('Y-m-d') ?>
        </span>
    </li>

    <?php
    foreach ($listPost as $post) {
        $user = \common\models\User::findOne(['id' => $post['user_id']]);
        if (strlen($post['content']) > 200) {
            $content = substr($post['content'], 0, 200) ." ...";
        } else {
            $content = $post['content'];
        }

        echo '<li>
        <i class="fa fa-edit bg-red"></i>
        <div class="timeline-item">
            <span class="time"><i class="fa fa-clock-o"></i>'.$post['create_at'].'</span>
            <h3 class="timeline-header"><a href="?r=user/show-friend-timeline&id='.$user['id'].'">'.$user['fullname'].'</a> đã đăng một bài viết</h3>
            <div class="timeline-body">
                '.$content.'
            </div>
            <div class="timeline-footer">
                <a href="?r=post/detail&id='.$post['id'].'" class="btn btn-danger btn-flat btn-xs">Xem bài viết</a>
            </div>
        </div>
    </li>';
    }
    ?>

    <li>
        <i class="fa fa-clock-o bg-gray"></i>
    </li>
</ul>
