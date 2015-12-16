<?php
use yii\helpers\Url;
$model = \common\models\User::findOne(['id' => Yii::$app->user->getId()]);

$isAdmin = $model['is_admin'] == 1;
?>

<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php
                if ($model['image'] != "") {
                    echo Yii::$app->request->baseUrl ."/images/" .$model['image'];
                } else {
                    echo Yii::$app->request->baseUrl ."/images/avatar-default.jpg";
                }
                ?>" class="img-circle" alt="User Image"/>
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
                    ['label' => 'Bảng tùy chọn', 'options' => ['class' => 'header']],
                    ['label' => 'Bài viết', 'icon' => 'fa fa-edit', 'url' => ['/post/show-all'], 'active' => '0'],
                    [
                        'label' => 'Mối quan hệ',
                        'icon' => 'fa fa-group',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Bạn bè', 'icon' => 'fa fa-circle-o', 'url' => '?r=relationship/show-list-friend&friend_type=1',],
                            ['label' => 'Người thân', 'icon' => 'fa fa-circle-o', 'url' => '?r=relationship/show-list-friend&friend_type=2',],
                        ],
                    ],
                    ['label' => 'Lịch làm việc', 'icon' => 'fa fa-calendar', 'url' => ['/schedule/show']],
                    ['label' => 'Tin nhắn', 'icon' => 'fa fa-envelope', 'url' => ['/message/show-inbox']],
                    [
                        'label' => 'Quản trị viên',
                        'icon' => 'fa fa-cogs',
                        'url' => '#',
                        'visible' => $isAdmin,
                        'items' => [
                            ['label' => 'Quản lý người dùng', 'icon' => 'fa fa-user', 'url' => ['admin/user-manage']],
                            ['label' => 'Quản lý bài viết', 'icon' => 'fa fa-edit', 'url' => ['admin/post-manage']],
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
