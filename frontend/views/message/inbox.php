<?php
/**
 * Created by PhpStorm.
 * User: Nguyen
 * Date: 11/12/2015
 * Time: 4:16 PM
 */
use yii\widgets\LinkPager;
$this->title = 'Tin nhắn';
$this->params['breadcrumbs'][] = $this->title;

$newCount = \common\models\Message::find()->where(['receiver_id' => Yii::$app->user->getId(), 'status' => 0])->count();
?>

<div class="row">
    <div class="col-md-3">
        <a href="?r=message/compose" class="btn btn-primary btn-block margin-bottom">Soạn</a>
        <div class="box box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Danh mục</h3>
                <div class="box-tools">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div>
            </div>
            <div class="box-body no-padding">
                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="#"><i class="fa fa-inbox"></i> Tin đã nhận <span class="label label-primary pull-right"><?= $newCount ?></span></a></li>
                    <li><a href="?r=message/show-outbox"><i class="fa fa-envelope-o"></i> Tin đã gửi</a></li>
                    <li><a href="?r=message/show-drafts"><i class="fa fa-file-text-o"></i> Tin nháp</a></li>
                </ul>
            </div><!-- /.box-body -->
        </div><!-- /. box -->
    </div><!-- /.col -->
    <div class="col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Hộp tin</h3>

            </div><!-- /.box-header -->
            <div class="box-body no-padding">

                <div class="table-responsive mailbox-messages">
                    <table class="table table-hover table-striped">
                        <tbody>
                        <?php
                        foreach ($model as $item) {
                            $user = \common\models\User::findOne(['id' => $item['sender_id']]);
                            if ($item['status'] == 0) {
                                echo '<tr>
                            <td><div aria-disabled="false" aria-checked="false" style="position: relative;" class="icheckbox_flat-blue"><input style="position: absolute; opacity: 0;" type="checkbox"><ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper"></ins></div></td>
                            <td class="mailbox-star"><a href=""><i class="fa fa-star text-yellow"></i></a></td>
                            <td class="mailbox-name"><a href="?r=message/read&id='.$item['id'].'">'.$user['username'].'</a></td>
                            <td class="mailbox-subject"><b> '.$item['subject'].'</b> '.$item['content'].'</td>
                            <td class="mailbox-date">'.$item['create_at'].'</td>
                            </tr>';
                            } else {
                                echo '<tr>
                            <td><div aria-disabled="false" aria-checked="false" style="position: relative;" class="icheckbox_flat-blue"><input style="position: absolute; opacity: 0;" type="checkbox"><ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper"></ins></div></td>
                            <td class="mailbox-star"><a href=""><i class="fa fa-star-o text-yellow"></i></a></td>
                            <td class="mailbox-name"><a href="?r=message/read&id='.$item['id'].'">'.$user['username'].'</a></td>
                            <td class="mailbox-subject"><b> '.$item['subject'].'</b> '.$item['content'].'</td>
                            <td class="mailbox-date">'.$item['create_at'].'</td>
                            </tr>';
                            }
                        }
                        ?>
                        </tbody>
                    </table><!-- /.table -->
                </div><!-- /.mail-box-messages -->
            </div><!-- /.box-body -->
            <div class="box-footer no-padding">
                <div class="mailbox-controls">
                    <div class="pull-right">
                        <?= LinkPager::widget(['pagination' => $pagination]) ?>
                    </div>
                </div>
            </div>
        </div><!-- /. box -->
    </div><!-- /.col -->
</div>