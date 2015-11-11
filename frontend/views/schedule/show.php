<?php
use kartik\datetime\DateTimePicker;

$this->title = 'Lịch làm việc';
$this->params['breadcrumbs'][] = $this->title;

$listE = \common\models\Schedule::find()->where(['own_id' => Yii::$app->user->getId()])->asArray()->all();
$events = array();

foreach ($listE as $item) {
    $event = new \yii2fullcalendar\models\Event();
    $event->id = $item['id'];
    $event->title = $item['title'];
    $event->start = date($item['start']);
    $event->end = date($item['end']);
    $event->color = $item['color'];
    $events[] = $event;
}
?>

<div class="row">
    <div class="col-md-3">
        <div class="box box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Tạo một sự kiện</h3>
            </div>
            <div class="box-body">
                <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
                    <!--<button type="button" id="color-chooser-btn" class="btn btn-info btn-block dropdown-toggle" data-toggle="dropdown">Color <span class="caret"></span></button>-->
                    <ul class="fc-color-picker" id="color-chooser">
                        <li><a class="text-aqua" href="#"><i class="fa fa-square"></i></a></li>
                        <li><a class="text-blue" href="#"><i class="fa fa-square"></i></a></li>
                        <li><a class="text-light-blue" href="#"><i class="fa fa-square"></i></a></li>
                        <li><a class="text-teal" href="#"><i class="fa fa-square"></i></a></li>
                        <li><a class="text-yellow" href="#"><i class="fa fa-square"></i></a></li>
                        <li><a class="text-orange" href="#"><i class="fa fa-square"></i></a></li>
                        <li><a class="text-green" href="#"><i class="fa fa-square"></i></a></li>
                        <li><a class="text-lime" href="#"><i class="fa fa-square"></i></a></li>
                        <li><a class="text-red" href="#"><i class="fa fa-square"></i></a></li>
                        <li><a class="text-purple" href="#"><i class="fa fa-square"></i></a></li>
                        <li><a class="text-fuchsia" href="#"><i class="fa fa-square"></i></a></li>
                        <li><a class="text-muted" href="#"><i class="fa fa-square"></i></a></li>
                        <li><a class="text-navy" href="#"><i class="fa fa-square"></i></a></li>
                    </ul>
                </div><!-- /btn-group -->
                <form action="?r=schedule/create-event" method="post">
                    <input id="event_color" name="EventCreateForm[color]" style="display: none" value="#00C0EF">
                    <div class="input-group">
                        <div class="input-group-btn">
                            <label style="background-color: rgb(0, 166, 90); border-color: rgb(0, 166, 90);" id="add-new-event" class="btn btn-primary btn-flat">Tên:</label>
                        </div><!-- /btn-group -->
                        <input name="EventCreateForm[title]" id="new-event" class="form-control" type="text">
                    </div><!-- /input-group -->
                    <div class="input-group" style="margin-top: 10px">
                        <?=
                        DateTimePicker::widget([
                            'name' => 'EventCreateForm[start]',
                            'type' => DateTimePicker::TYPE_COMPONENT_PREPEND,
                            'pluginOptions' => [
                                'autoclose'=>true,
                                'format' => 'yyyy-mm-dd hh:ii'
                            ]
                        ]);
                        ?>
                    </div>
                    <div class="input-group" style="margin-top: 10px">
                        <?=
                        DateTimePicker::widget([
                            'name' => 'EventCreateForm[end]',
                            'type' => DateTimePicker::TYPE_COMPONENT_PREPEND,
                            'pluginOptions' => [
                                'autoclose'=>true,
                                'format' => 'yyyy-mm-dd hh:ii'
                            ]
                        ]);
                        ?>
                    </div>
                    <div class="input-group">
                        <button class="btn bg-purple margin" type="submit">Thêm sự kiện</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-9">
        <div class="box box-primary">
            <div class="box-body no-padding">
                <!-- THE CALENDAR -->
                <?= \yii2fullcalendar\yii2fullcalendar::widget(array(
                    'events'=> $events,
                )); ?>
            </div><!-- /.box-body -->
        </div><!-- /. box -->
    </div>
</div>
