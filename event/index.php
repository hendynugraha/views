<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;

$this->title = 'Roster Bul Hanine Project';
$this->params['breadcrumbs'][] = $this->title;

$js=<<< JS
var eventSource=['/event/filter-events'];
$("#select_name").on('change',function() {
    //get current status of our filters into eventSourceNew
    var eventSourceNew=['/event/filter-events?choice=' +  $(this).val()];
    //remove the old eventSources
    $('#event').fullCalendar('removeEventSource', eventSource[0]);
    //attach the new eventSources
    $('#event').fullCalendar('addEventSource', eventSourceNew[0]);
    $('#event').fullCalendar('refetchEvents');
    //copy to current source 
    eventSource = eventSourceNew;
});
JS;
    $this->registerJs($js, \yii\web\View::POS_READY);

?>
<div class="event-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p><?= Html::a('Create Roster', ['create'], ['class' => 'btn btn-success']) ?></p>
    <p>
        <select class="model_attribute" id="select_name">
            <option value="all">All Tech</option>
            <option value="0">Hendy Nugraha</option>
            <option value="1">Ginanjar Nurwin</option>
            <option value="2">Rio Andhika</option>
        </select>
    </p>
    <div id="event"></div>



    <?php 
        Modal::begin([
            'header'=>'<h4>Roster</h4>',
            'id' => 'model',
            'size' => 'model-lg',
        ]);
        echo "<div id='modelContent'></div>";
        Modal::end();

    ?>

    <?=\yii2fullcalendar\yii2fullcalendar::widget(array(
      'events'=> $events, 
      'id' => 'event',
      'clientOptions' => [ 
        'editable' => true,
        'eventSources' => ['/event/filter-events'],
        'draggable' => true,
        'droppable' => true,
        ],
      'eventClick' => "function(calEvent, jsEvent, view) {

                $(this).css('border-color', 'red');

                $.get('index.php?r=event/update',{'id':calEvent.id}, function(data){
                    $('.modal').modal('show')
                    .find('#modelContent')
                    .html(data);
                })

                $('#calendar').fullCalendar('removeEvents', function (calEvent) {
                    return true;
                });

        }",
    ));

    ?>
</div>