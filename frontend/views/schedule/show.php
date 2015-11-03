<?php
/**
 * Created by PhpStorm.
 * User: Nguyen
 * Date: 10/30/2015
 * Time: 10:59 PM
 */
?>

<div class="row">
    <div class="col-md-3">
        <div class="box box-solid">
            <div class="box-header with-border">
                <h4 class="box-title">Draggable Events</h4>
            </div>
            <div class="box-body">
                <!-- the events -->
                <div id="external-events">
                    <div class="external-event bg-green ui-draggable ui-draggable-handle" style="position: relative;">Lunch</div>
                    <div class="external-event bg-yellow ui-draggable ui-draggable-handle" style="position: relative;">Go home</div>
                    <div class="external-event bg-aqua ui-draggable ui-draggable-handle" style="position: relative;">Do homework</div>
                    <div class="external-event bg-light-blue ui-draggable ui-draggable-handle" style="position: relative;">Work on UI design</div>
                    <div class="external-event bg-red ui-draggable ui-draggable-handle" style="position: relative;">Sleep tight</div>
                    <div class="checkbox">
                        <label for="drop-remove">
                            <input type="checkbox" id="drop-remove">
                            remove after drop
                        </label>
                    </div>
                </div>
            </div><!-- /.box-body -->
        </div><!-- /. box -->
        <div class="box box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Create Event</h3>
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
                <div class="input-group">
                    <input id="new-event" type="text" class="form-control" placeholder="Event Title">
                    <div class="input-group-btn">
                        <button id="add-new-event" type="button" class="btn btn-primary btn-flat">Add</button>
                    </div><!-- /btn-group -->
                </div><!-- /input-group -->
            </div>
        </div>
    </div>

    <div class="col-md-9">

        <div style="cursor: move;" class="box-header ui-sortable-handle">
            <i class="fa fa-calendar"></i>
            <h3 class="box-title">Calendar</h3>
            <!-- tools box -->
            <div class="pull-right box-tools">
                <!-- button with a dropdown -->
                <div class="btn-group">
                    <button class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i></button>
                    <ul class="dropdown-menu pull-right" role="menu">
                        <li><a href="#">Add new event</a></li>
                        <li><a href="#">Clear events</a></li>
                        <li class="divider"></li>
                        <li><a href="#">View calendar</a></li>
                    </ul>
                </div>
                <button class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
            </div><!-- /. tools -->
        </div><!-- /.box-header -->
        <div class="box-body no-padding">
            <!--The calendar -->
            <div id="calendar" style="width: 100%"><div class="datepicker datepicker-inline"><div style="display: block;" class="datepicker-days"><table class="table table-condensed"><thead><tr><th style="visibility: visible;" class="prev">«</th><th colspan="5" class="datepicker-switch">November 2015</th><th style="visibility: visible;" class="next">»</th></tr><tr><th class="dow">Su</th><th class="dow">Mo</th><th class="dow">Tu</th><th class="dow">We</th><th class="dow">Th</th><th class="dow">Fr</th><th class="dow">Sa</th></tr></thead><tbody><tr><td class="old day">25</td><td class="old day">26</td><td class="old day">27</td><td class="old day">28</td><td class="old day">29</td><td class="old day">30</td><td class="old day">31</td></tr><tr><td class="day">1</td><td class="day">2</td><td class="day">3</td><td class="day">4</td><td class="day">5</td><td class="day">6</td><td class="day">7</td></tr><tr><td class="day">8</td><td class="day">9</td><td class="day">10</td><td class="day">11</td><td class="day">12</td><td class="day">13</td><td class="day">14</td></tr><tr><td class="day">15</td><td class="day">16</td><td class="day">17</td><td class="day">18</td><td class="day">19</td><td class="day">20</td><td class="day">21</td></tr><tr><td class="day">22</td><td class="day">23</td><td class="day">24</td><td class="active day">25</td><td class="day">26</td><td class="day">27</td><td class="day">28</td></tr><tr><td class="day">29</td><td class="day">30</td><td class="new day">1</td><td class="new day">2</td><td class="new day">3</td><td class="new day">4</td><td class="new day">5</td></tr></tbody><tfoot><tr><th style="display: none;" colspan="7" class="today">Today</th></tr><tr><th style="display: none;" colspan="7" class="clear">Clear</th></tr></tfoot></table></div><div style="display: none;" class="datepicker-months"><table class="table table-condensed"><thead><tr><th style="visibility: visible;" class="prev">«</th><th colspan="5" class="datepicker-switch">2015</th><th style="visibility: visible;" class="next">»</th></tr></thead><tbody><tr><td colspan="7"><span class="month">Jan</span><span class="month">Feb</span><span class="month">Mar</span><span class="month">Apr</span><span class="month">May</span><span class="month">Jun</span><span class="month">Jul</span><span class="month">Aug</span><span class="month">Sep</span><span class="month">Oct</span><span class="month active">Nov</span><span class="month">Dec</span></td></tr></tbody><tfoot><tr><th style="display: none;" colspan="7" class="today">Today</th></tr><tr><th style="display: none;" colspan="7" class="clear">Clear</th></tr></tfoot></table></div><div style="display: none;" class="datepicker-years"><table class="table table-condensed"><thead><tr><th style="visibility: visible;" class="prev">«</th><th colspan="5" class="datepicker-switch">2010-2019</th><th style="visibility: visible;" class="next">»</th></tr></thead><tbody><tr><td colspan="7"><span class="year old">2009</span><span class="year">2010</span><span class="year">2011</span><span class="year">2012</span><span class="year">2013</span><span class="year">2014</span><span class="year active">2015</span><span class="year">2016</span><span class="year">2017</span><span class="year">2018</span><span class="year">2019</span><span class="year new">2020</span></td></tr></tbody><tfoot><tr><th style="display: none;" colspan="7" class="today">Today</th></tr><tr><th style="display: none;" colspan="7" class="clear">Clear</th></tr></tfoot></table></div></div></div>
        </div><!-- /.box-body -->
        <div class="box-footer text-black">
            <div class="row">
                <div class="col-sm-6">
                    <!-- Progress bars -->
                    <div class="clearfix">
                        <span class="pull-left">Task #1</span>
                        <small class="pull-right">90%</small>
                    </div>
                    <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 90%;"></div>
                    </div>

                    <div class="clearfix">
                        <span class="pull-left">Task #2</span>
                        <small class="pull-right">70%</small>
                    </div>
                    <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 70%;"></div>
                    </div>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <div class="clearfix">
                        <span class="pull-left">Task #3</span>
                        <small class="pull-right">60%</small>
                    </div>
                    <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 60%;"></div>
                    </div>

                    <div class="clearfix">
                        <span class="pull-left">Task #4</span>
                        <small class="pull-right">40%</small>
                    </div>
                    <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%;"></div>
                    </div>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div>

    </div>
</div>