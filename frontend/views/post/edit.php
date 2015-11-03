<?php
/**
 * Created by PhpStorm.
 * User: Nguyen
 * Date: 10/10/2015
 * Time: 3:03 PM
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Edit Post';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="post-edit-form">
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">Fill content to edit this post</h3>
                </div>
                <div class="box-body">

                    <?php $form = ActiveForm::begin()?>
                    <?= $form->field($model,'title')?>

                    <div class="form-group">
                        <label for="inputDate">Date</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input value="<?= $model['date'] ?>" id="inputDate" name="PostEditForm[date]" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" type="text">
                        </div><!-- /.input group -->
                    </div>

                    <?= $form->field($model,'content')->textarea(['length' => 1000, 'rows' => 8])?>

                    <div class="form-group">
                        <label for="inputPermit">Permission</label>
                        <div class="row">
                            <div class="col-lg-2">
                                <select id="inputPermit" class="form-control" name="PostEditForm[permit][]">
                                    <option value="1">private</option>
                                    <option value="2">protected 1</option>
                                    <option value="3">protected 2</option>
                                    <option value="4">public</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group" style="margin-top:30px">
                        <?= Html::submitButton('Save',['class' => 'btn btn-success'])?>
                    </div>
                    <?php ActiveForm::end() ?>

                </div><!-- /.box-body -->
            </div>
        </div>
    </div>
</div>
