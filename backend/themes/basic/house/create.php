<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model \common\models\House */
/* @var $modelForm \backend\models\HouseForm */

$this->title = Yii::t('app', 'Новый объект');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Офисные здания/ТРЦ'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="box">
    <div class="box-body">
        <?= $this->render('_form', [
            'model' => $model,
            'modelForm' => $modelForm,
        ]) ?>
    </div>
</div>
