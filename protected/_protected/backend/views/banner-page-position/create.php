<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var common\models\BannerPagePosition $model
*/

$this->title = 'Create';
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Banner Page Positions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$model->status = true;
$model->sort = 0;
?>
<div class="giiant-crud banner-page-position-create">

    <h1>
        <?= Yii::t('models', 'Banner Page Position') ?>
        <small>
                        <?= $model->id ?>
        </small>
    </h1>

    <div class="clearfix crud-navigation">
        <div class="pull-left">
            <?=             Html::a(
            'Cancel',
            \yii\helpers\Url::previous(),
            ['class' => 'btn btn-default']) ?>
        </div>
    </div>

    <hr />

    <?= $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
