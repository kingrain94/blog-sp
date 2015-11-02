<?php
use yii\helpers\Url;
?>

<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="?r=user/find-username" method="post" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="username" class="form-control" placeholder="Tìm kiếm ..."/>
              <span class="input-group-btn">
                <button type="submit"  id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'Navigation', 'options' => ['class' => 'header']],
                    ['label' => 'Bài viết', 'icon' => 'fa fa-file-code-o', 'url' => ['/post/show-all'], 'active' => '0'],
                    ['label' => 'Bạn bè', 'icon' => 'fa fa-file-code-o', 'url' => ['/relationship/show-list-friend'], 'active' => '0'],
                    ['label' => 'Lịch làm việc', 'icon' => 'fa fa-file-code-o', 'url' => ['/schedule/show']],
                ],
            ]
        ) ?>

    </section>

</aside>
