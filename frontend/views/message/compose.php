<?php
/**
 * Created by PhpStorm.
 * User: Nguyen
 * Date: 11/12/2015
 * Time: 4:21 PM
 */
use common\models\Relationship;
use dosamigos\ckeditor\CKEditor;
use kartik\select2\Select2;
use yii\widgets\ActiveForm;

$this->title = 'Soạn tin nhắn';
$this->params['breadcrumbs'][] = $this->title;

$sql = 'SELECT * FROM relationship WHERE ((user_id_1=:user_id)
                  OR (user_id_2=:user_id)) AND status=1';
$arrRelationship = Relationship::findBySql($sql, [':user_id' => Yii::$app->user->getId()])->asArray()->all();
$arrUserName = array();
foreach ($arrRelationship as $rel) {
    if ($rel['user_id_1'] == Yii::$app->user->getId()) {
        $arrUserName[$rel['user_id_2']] = \common\models\User::findOne(['id' => $rel['user_id_2']])->username;
    } else {
        $arrUserName[$rel['user_id_1']] = \common\models\User::findOne(['id' => $rel['user_id_1']])->username;
    }
}
?>

<div class="row">
    <div class="col-md-3">
        <a href="?r=message/show-inbox" class="btn btn-primary btn-block margin-bottom">Quay lại hộp tin</a>
        <div class="box box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Danh mục</h3>
                <div class="box-tools">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div>
            </div>
            <div class="box-body no-padding">
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="?r=message/show-inbox"><i class="fa fa-inbox"></i> Tin đã nhận <span class="label label-primary pull-right">12</span></a></li>
                    <li><a href="?r=message/show-outbox"><i class="fa fa-envelope-o"></i> Tin đã gửi</a></li>
                    <li><a href="?r=message/show-drafts"><i class="fa fa-file-text-o"></i> Tin nháp</a></li>
                </ul>
            </div><!-- /.box-body -->
        </div><!-- /. box -->
    </div><!-- /.col -->
    <div class="col-md-9">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Soạn tin nhắn mới</h3>
            </div><!-- /.box-header -->

            <?php $form = ActiveForm::begin()?>
            <div class="box-body">
                <?=
                $form->field($model, 'receiver[]')->widget(Select2::classname(), [
                    'data' => $arrUserName,
                    'language' => 'en',
                    'options' => ['multiple' => true, 'placeholder' => 'To ...'],
                    'pluginOptions' => [
                        'allowClear' => true
                    ],
                ]);
                ?>

                <?= $form->field($model,'subject')?>

                <?= $form->field($model, 'content')->widget(CKEditor::className(), [
                    'options' => ['rows' => 10],
                    'preset' => 'basic'
                ]) ?>
            </div>

            <div class="box-footer">
                <div class="pull-right">
                    <button class="save_message btn btn-default"><i class="fa fa-pencil"></i> Lưu</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Gửi</button>
                </div>
                <button class="discard_message btn btn-default"><i class="fa fa-times"></i> Xóa</button>
            </div>
            <?php ActiveForm::end() ?>
        </div><!-- /. box -->
    </div><!-- /.col -->
</div>
