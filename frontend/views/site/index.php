<?php
/**
 * Created by PhpStorm.
 * User: Nguyen
 * Date: 10/10/2015
 * Time: 6:57 PM
 */
$this->title = "Dòng thời gian";
$this->params['breadcrumbs'][] = $this->title;
?>

<ul class="timeline">

    <li class="time-label"> <!-- The first of one date -->
        <span class="bg-red">
            <?= date('Y-m-d') ?>
        </span>
    </li>

    <li>
        <i class="fa fa-envelope bg-blue"></i>
        <div class="timeline-item">
            <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

            <h3 class="timeline-header"><a href="#">Support Team</a> ...</h3>

            <div class="timeline-body">
                ...
                Content goes here
            </div>

            <div class="timeline-footer">
                <a class="btn btn-primary btn-xs">...</a>
            </div>
        </div>
    </li>

    <li>
        <i class="fa fa-user bg-aqua"></i>
        <div class="timeline-item">
            <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>
            <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request</h3>
        </div>
    </li>

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

    <li>
        <i class="fa fa-clock-o bg-gray"></i>
    </li>
</ul>
