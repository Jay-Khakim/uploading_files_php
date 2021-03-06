<?php

use common\models\Lang;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use \dmstr\bootstrap\Tabs;
use yii\helpers\StringHelper;

/**
* @var yii\web\View $this
* @var common\models\SubCategory $model
* @var yii\widgets\ActiveForm $form
*/

?>

<div class="sub-category-form">

    <?php $form = ActiveForm::begin([
    'id' => 'SubCategory',
    'layout' => 'horizontal',
    'enableClientValidation' => true,
    'errorSummaryCssClass' => 'error-summary alert alert-error'
    ]
    );
    ?>

    <div class="">
        <?php $this->beginBlock('main'); ?>

        <p>
            
        <?php foreach (Lang::find()->all() as $lang) : ?>
                <?= $form->field($model, "title[$lang->url]")->textInput([
                        'value' => $model->isNewRecord ? '' : ($model->getSubCategoryTranslates()->where(['lang_id' => $lang->id])->one() ? $model->getSubCategoryTranslates()->where(['lang_id' => $lang->id])->one()->title : '')
                    ])->label('Title ' . $lang->name) ?>
            <?php endforeach ?>

            <?php foreach (Lang::find()->all() as $lang) : ?>
                <?= $form->field($model, "meta_keywords[$lang->url]")->textInput([
                        'value' => $model->isNewRecord ? '' : ($model->getSubCategoryTranslates()->where(['lang_id' => $lang->id])->one() ? $model->getSubCategoryTranslates()->where(['lang_id' => $lang->id])->one()->meta_keywords : '')
                    ])->label('Meta keywords ' . $lang->name) ?>
            <?php endforeach ?>
<!-- attribute status -->
			<?= $form->field($model, 'status')->checkbox() ?>

<!-- attribute category_id -->
			<?= // generated by schmunk42\giiant\generators\crud\providers\core\RelationProvider::activeField
$form->field($model, 'category_id')->dropDownList(
    \yii\helpers\ArrayHelper::map(common\models\Category::find()->all(), 'id', 'categoryTranslate.title'),
    [
        'prompt' => 'Select category...',
        'disabled' => (isset($relAttributes) && isset($relAttributes['category_id'])),
    ]
); ?>

<!-- attribute sort -->
			<?= $form->field($model, 'sort')->textInput() ?>

<!-- attribute image -->
			<?= $form->field($model, 'rasm')->fileInput() ?>
        </p>
        <?php $this->endBlock(); ?>
        
        <?=
    Tabs::widget(
                 [
                    'encodeLabels' => false,
                    'items' => [ 
                        [
    'label'   => Yii::t('models', 'SubCategory'),
    'content' => $this->blocks['main'],
    'active'  => true,
],
                    ]
                 ]
    );
    ?>
        <hr/>

        <?php echo $form->errorSummary($model); ?>

        <?= Html::submitButton(
        '<span class="glyphicon glyphicon-check"></span> ' .
        ($model->isNewRecord ? 'Create' : 'Save'),
        [
        'id' => 'save-' . $model->formName(),
        'class' => 'btn btn-success'
        ]
        );
        ?>

        <?php ActiveForm::end(); ?>

    </div>

</div>

