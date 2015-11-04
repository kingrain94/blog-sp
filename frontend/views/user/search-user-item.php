<?php
/**
 * Created by PhpStorm.
 * User: Nguyen
 * Date: 10/13/2015
 * Time: 10:15 PM
 */
?>

<a href="?r=user/show-friend-timeline&id=<?= $model['id'] ?>">
    <div class="box box-widget widget-user">
        <!-- Add the bg color to the header using any of the bg-* classes -->
        <div class="widget-user-header bg-aqua-active">
            <h3 class="widget-user-username"><?= $model['username'] ?></h3>
            <h5 class="widget-user-desc"><?= $model['job'] ?></h5>
        </div>
        <div class="widget-user-image">
            <img class="img-circle" src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xpt1/v/t1.0-1/p160x160/11924271_619643408138167_2330895080493746153_n.jpg?oh=571f107c9b58e8a40855a3f2fc24f698&oe=56CB240D&__gda__=1452708976_36f67527aaa315e978072b6257923c0d" alt="User Avatar">
        </div>
        <div class="box-footer">
            <div class="row">
                <div class="col-sm-6">
                    <div class="description-block">
                        <h5 class="description-header">3,200</h5>
                        <span class="description-text">POST</span>
                    </div><!-- /.description-block -->
                </div><!-- /.col -->

                <div class="col-sm-6">
                    <div class="description-block">
                        <h5 class="description-header">35</h5>
                        <span class="description-text">FRIEND</span>
                    </div><!-- /.description-block -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </div>
</a>