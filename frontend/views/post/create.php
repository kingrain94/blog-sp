<?php
/**
 * Created by PhpStorm.
 * User: Nguyen
 * Date: 10/10/2015
 * Time: 3:03 PM
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'New Post';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="post-create-form">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <?php $form = ActiveForm::begin()?>
            <?= $form->field($model,'title')?>
            <?= $form->field($model,'content')->textarea(['length' => 1000, 'rows' => 8])?>
            <label>Permission</label>
            <div class="row">
                <div class="col-lg-4">
                    <select class="form-control" name="PostCreateForm[permit][]">
                        <option value="1">private</option>
                        <option value="2">protected 1</option>
                        <option value="3">protected 2</option>
                        <option value="4">public</option>
                    </select>
                </div>
            </div>
            <div class="form-group" style="margin-top:30px">
                <?= Html::submitButton('Create',['class' => 'btn btn-success'])?>
            </div>
            <?php ActiveForm::end() ?>
        </div>
    </div>
</div>
