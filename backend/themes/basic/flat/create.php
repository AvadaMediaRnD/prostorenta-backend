<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model \common\models\Flat */
/* @var $modelForm \backend\models\FlatForm */

$this->title = Yii::t('app', 'Новая площадь');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Коммерческие площади'), 'url' => ['index']];
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

