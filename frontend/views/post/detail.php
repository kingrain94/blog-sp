<?php
/**
 * Created by PhpStorm.
 * User: Nguyen
 * Date: 10/27/2015
 * Time: 10:46 PM
 */
$this->title = 'Post Detail';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="col-lg-10 col-lg-offset-1">
        <!-- Box Comment -->
        <div class="box box-widget">
            <div class="box-header with-border">
                <div class="user-block">
                    <img class="img-circle" src="<?= Yii::$app->request->baseUrl ."/images/post-icon.PNG" ?>" alt="user image">
                    <span class="title"><a href="#"><?= $model['title'] ?></a></span>
                    <span class="description"><?= $model['date'] ?></span>
                </div><!-- /.user-block -->
                <div class="box-tools">
                    <button class="btn btn-box-tool" data-toggle="tooltip" title="Mark as read"><i class="fa fa-circle-o"></i></button>
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div><!-- /.box-tools -->
            </div><!-- /.box-header -->
            <div class="box-body">
                <!-- post text -->
                <p>
                    <?= $model['content'] ?>
                </p>

                <!-- Social sharing buttons -->
                <button class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
                <span class="pull-right text-muted">45 likes - 2 comments</span>
            </div><!-- /.box-body -->
            <div class="box-footer box-comments">
                <div class="box-comment">
                    <!-- User image -->
                    <img class="img-circle img-sm" src="http://localhost/yii2adv-blog/frontend/web/assets/58e3e194/img/user2-160x160.jpg" alt="user image">
                    <div class="comment-text">
                      <span class="username">
                        Maria Gonzales
                        <span class="text-muted pull-right">8:03 PM Today</span>
                      </span><!-- /.username -->
                        It is a long established fact that a reader will be distracted
                        by the readable content of a page when looking at its layout.
                    </div><!-- /.comment-text -->
                </div><!-- /.box-comment -->
                <div class="box-comment">
                    <!-- User image -->
                    <img class="img-circle img-sm" src="http://localhost/yii2adv-blog/frontend/web/assets/58e3e194/img/user2-160x160.jpg" alt="user image">
                    <div class="comment-text">
                      <span class="username">
                        Nora Havisham
                        <span class="text-muted pull-right">8:03 PM Today</span>
                      </span><!-- /.username -->
                        The point of using Lorem Ipsum is that it has a more-or-less
                        normal distribution of letters, as opposed to using
                        'Content here, content here', making it look like readable English.
                    </div><!-- /.comment-text -->
                </div><!-- /.box-comment -->
            </div><!-- /.box-footer -->
            <div class="box-footer">
                <form action="#" method="post">
                    <img class="img-responsive img-circle img-sm" src="http://localhost/yii2adv-blog/frontend/web/assets/58e3e194/img/user2-160x160.jpg" alt="alt text">
                    <!-- .img-push is used to add margin to elements next to floating images -->
                    <div class="img-push">
                        <input type="text" class="form-control input-sm" placeholder="Press enter to post comment">
                    </div>
                </form>
            </div><!-- /.box-footer -->
        </div><!-- /.box -->
    </div >
</div>
