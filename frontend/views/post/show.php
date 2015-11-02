<?php
/**
 * Created by PhpStorm.
 * User: Nguyen
 * Date: 10/11/2015
 * Time: 2:39 PM
 */

$this->title = 'Post';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="post-show">

    <div class="row">
        <div class="col-lg-1">

        </div>

        <div class="col-lg-5">
            <?php
            $i = 0;
            foreach($model as $item) {
                if ($i % 2 == 0) {
                    echo $this->render('item', ['model' => $item]);
                }
                $i ++;
            }
            ?>
        </div>

        <div class="col-lg-5">
            <?php
            $i = 0;
            foreach($model as $item) {
                if ($i % 2 != 0) {
                    echo $this->render('item', ['model' => $item]);
                }
                $i ++;
            }
            ?>
        </div>
    </div>

    <a class="btn btn-app" href="<?= \yii\helpers\Url::to(['/post/create']) ?>" style="position: fixed; bottom: 50px; right: 10px; border-color: #3c8dbc">
        <i class="fa fa-edit"></i> Create
    </a>

</div>
