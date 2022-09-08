<?php

/*
 * This file is part of the 2amigos/yii2-usuario project.
 *
 * (c) 2amigOS! <http://2amigos.us/>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

use Da\User\Helper\AuthHelper;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

/**
 * @var \Da\User\Model\Permission $model
 * @var yii\web\View $this
 * @var string[] $unassignedItems
 */

/** @var AuthHelper $authHelper */
$authHelper = Yii::$container->get(AuthHelper::class);

?>

<?php $form = ActiveForm::begin(
    [
        'enableClientValidation' => false,
        'enableAjaxValidation' => true,
    ]
) ?>

<?= $form->field($model, 'name') ?>

<?= $form->field($model, 'description') ?>


<?= $form->field($model, 'rule')->widget(Select2::class, [
    'bsVersion' => 4,
    'data' => ArrayHelper::map($authHelper->getAuthManager()->getRules(), 'name', 'name'),
    'options' => [
        'placeholder' => Yii::t('usuario', 'Select rule...'),
    ],
    'pluginOptions' => [
        'allowClear' => true
    ],
])?>

<?= $form->field($model, 'children')->widget(Select2::class, [
    'bsVersion' => 4,
    'data' => $unassignedItems,
    'options' => [
        'multiple' => true
    ],
    'pluginOptions' => [
        'allowClear' => true
    ],
])?>
<?= Html::submitButton(Yii::t('usuario', 'Save'), ['class' => 'btn btn-success btn-block']) ?>

<?php ActiveForm::end() ?>
