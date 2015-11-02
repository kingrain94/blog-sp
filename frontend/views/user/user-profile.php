<?php
/**
 * Created by PhpStorm.
 * User: Nguyen
 * Date: 10/21/2015
 * Time: 11:01 PM
 */
?>

<div class="row">
    <div class="col-md-3">

        <!-- Profile Image -->
        <div class="box box-primary">
            <div class="box-body box-profile">
                <img class="profile-user-img img-responsive img-circle" src="http://localhost/yii2adv-blog/frontend/web/assets/58e3e194/img/user2-160x160.jpg" alt="User profile picture">
                <h3 class="profile-username text-center"><?= $model['fullname'] ?></h3>
                <p class="text-muted text-center"><?= $model['job'] ?></p>

                <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                        <b>Posts</b> <a class="pull-right">100</a>
                    </li>
                    <li class="list-group-item">
                        <b>Friends</b> <a class="pull-right">100</a>
                    </li>
                </ul>

                <a href="#" class="btn btn-primary btn-block"><b>Add Friend</b></a>
            </div><!-- /.box-body -->
        </div><!-- /.box -->

        <!-- About Me Box -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">About Me</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <strong><i class="fa fa-book margin-r-5"></i>  Education</strong>
                <p class="text-muted">
                    <?= $model['education'] ?>
                </p>

                <hr>

                <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>
                <p class="text-muted"><?= $model['location'] ?></p>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div><!-- /.col -->
    <div class="col-md-9">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class=""><a href="#timeline" data-toggle="tab" aria-expanded="false">Timeline</a></li>
                <li class="active"><a href="#settings" data-toggle="tab" aria-expanded="true">Settings</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane" id="timeline">
                    <!-- The timeline -->
                    <ul class="timeline timeline-inverse">
                        <!-- timeline time label -->
                        <li class="time-label">
                        <span class="bg-red">
                          10 Feb. 2014
                        </span>
                        </li>
                        <!-- /.timeline-label -->
                        <!-- timeline item -->
                        <li>
                            <i class="fa fa-envelope bg-blue"></i>
                            <div class="timeline-item">
                                <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>
                                <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>
                                <div class="timeline-body">
                                    Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                                    weebly ning heekya handango imeem plugg dopplr jibjab, movity
                                    jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                                    quora plaxo ideeli hulu weebly balihoo...
                                </div>
                                <div class="timeline-footer">
                                    <a class="btn btn-primary btn-xs">Read more</a>
                                    <a class="btn btn-danger btn-xs">Delete</a>
                                </div>
                            </div>
                        </li>
                        <!-- END timeline item -->
                        <!-- timeline item -->
                        <li>
                            <i class="fa fa-user bg-aqua"></i>
                            <div class="timeline-item">
                                <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>
                                <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request</h3>
                            </div>
                        </li>
                        <!-- END timeline item -->
                        <!-- timeline item -->
                        <li>
                            <i class="fa fa-comments bg-yellow"></i>
                            <div class="timeline-item">
                                <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>
                                <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>
                                <div class="timeline-body">
                                    Take me to your leader!
                                    Switzerland is small and neutral!
                                    We are more like Germany, ambitious and misunderstood!
                                </div>
                                <div class="timeline-footer">
                                    <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                                </div>
                            </div>
                        </li>
                        <!-- END timeline item -->
                        <!-- timeline time label -->
                        <li class="time-label">
                        <span class="bg-green">
                          3 Jan. 2014
                        </span>
                        </li>
                        <!-- /.timeline-label -->
                        <!-- timeline item -->
                        <li>
                            <i class="fa fa-camera bg-purple"></i>
                            <div class="timeline-item">
                                <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>
                                <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>
                                <div class="timeline-body">
                                    <img src="http://placehold.it/150x100" alt="..." class="margin">
                                    <img src="http://placehold.it/150x100" alt="..." class="margin">
                                    <img src="http://placehold.it/150x100" alt="..." class="margin">
                                    <img src="http://placehold.it/150x100" alt="..." class="margin">
                                </div>
                            </div>
                        </li>
                        <!-- END timeline item -->
                        <li>
                            <i class="fa fa-clock-o bg-gray"></i>
                        </li>
                    </ul>
                </div><!-- /.tab-pane -->

                <div class="tab-pane active" id="settings">
                    <form class="form-horizontal" action="<?= \yii\helpers\Url::to(['/user/edit-user-profile']) ?>" method="post">
                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Full Name</label>
                            <div class="col-sm-10">
                                <input name="ProfileForm[fullname]" value="<?= $model['fullname'] ?>" type="text" class="form-control" id="inputName" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Old Password</label>
                            <div class="col-sm-10">
                                <input name="ProfileForm[oldPassword]" type="password" class="form-control" id="inputName" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">New Password</label>
                            <div class="col-sm-10">
                                <input name="ProfileForm[newPassword]" type="password" class="form-control" id="inputName" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEducation" class="col-sm-2 control-label">Education</label>
                            <div class="col-sm-10">
                                <input name="ProfileForm[education]" value="<?= $model['education'] ?>" type="text" class="form-control" id="inputEducation" placeholder="Education">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputLocation" class="col-sm-2 control-label">Location</label>
                            <div class="col-sm-10">
                                <input name="ProfileForm[location]" value="<?= $model['location'] ?>" type="text" class="form-control" id="inputLocation" placeholder="Location">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </form>
                </div><!-- /.tab-pane -->
            </div><!-- /.tab-content -->
        </div><!-- /.nav-tabs-custom -->
    </div><!-- /.col -->
</div>
