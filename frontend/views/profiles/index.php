<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;

$this->title = 'Профили пользователей Инстаграмм да да да';
//print_r($profiles);die;
?>

<!--<div id="like_button_container"></div>-->
<div><h3><?=$result ?></h3></div>
<div>
    <?php $form = ActiveForm::begin(['method' => 'get', 'action'=>['']]); ?>
    <div>
    <?php $model->react=$_GET['Profiles']['react'];
    if(!$model->react) {
        $model->react=1;
    }
    
    echo $form->field ($model, 'react')->radioList([
    '1' => 'React компонент',
    '2' => 'Grid таблица'],
    [
        'unselect'=>null
    ]
            )->label('<h3>Вернуть в виде Grid таблицы или React компонента</h3>'); ?>
    </div>
        <div>
            <?= Html::submitButton('Submit', ['class' => 'btn btn-success']) ?>
            <br><br>
        </div>
            
    <?php ActiveForm::end(); ?>
</div>

<?php if($model->react!=1){?>
<div class="">
    <?php
    if(!empty($dataProvider)){
        echo GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    'id',
                    'id_inst',
                    'username',
                    'text',
                    'link',
                    'created_time',
                ],
            ]); 
        }
    ?>    
</div>
<?php } ?>

<?php if($model->react==1){?>
    <div id="root"></div>
<?php } ?>