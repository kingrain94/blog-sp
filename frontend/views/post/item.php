<?php
/**
 * Created by PhpStorm.
 * User: Nguyen
 * Date: 10/11/2015
 * Time: 3:07 PM
 */
$cmtCount = \common\models\Comment::find()->where(['post_id' => $model['id']])->count();
$likeCount = \common\models\Like::find()->where(['post_id' => $model['id']])->count();
?>

<div class="box box-widget">
    <div class="box-header with-border">
        <div class="user-block">
            <img class="img-circle" src="<?= Yii::$app->request->baseUrl ."/images/post-icon.PNG" ?>" alt="user image">
            <span class="username"><a href="?r=post/detail&id=<?= $model['id'] ?>"><?= $model['title'] ?></a></span>
            <span class="description"><?= $model['date'] ?></span>
        </div><!-- /.user-block -->
        <div class="box-tools">
            <a href="<?= Yii::$app->request->baseUrl ."?r=post/edit&id=" .$model['id'] ?>" class="btn btn-box-tool" data-widget="edit" title="Click to edit"><i class="fa fa-circle-o"></i></a>
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <a class="del_post" id="<?= $model['id'] ?>"><button class="btn btn-box-tool" title="Click to delete"><i class="fa fa-times"></i></button></a>
        </div><!-- /.box-tools -->
    </div><!-- /.box-header -->
    <div class="box-body">
        <!-- post text -->
        <p><?= $model['content'] ?></p>

        <!-- Social sharing buttons -->
        <a class="like_post" id="<?= $model['id'] ?>"><button class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button></a>
        <a class="unlike_post" id="<?= $model['id'] ?>" style="display: none"><button class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-down"></i> Unlike</button></a>
        <span class="pull-right text-muted"><?= $likeCount ?> likes - <?= $cmtCount ?> comments</span>
    </div><!-- /.box-body -->


</div>