<?php

/*
 * This file is part of the 2amigos/yii2-usuario project.
 *
 * (c) 2amigOS! <http://2amigos.us/>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

/**
 * @var \Da\User\Model\Permission
 * @var $this                     yii\web\View
 * @var $unassignedItems          string[]
 * @var Da\User\Module $module
 */

$this->title = Yii::t('usuario', 'Create new permission');
$this->params['breadcrumbs'][] = $this->title;
$module = Yii::$app->getModule('user');

?>

<?php $this->beginContent($module->viewPath . '/shared/admin_layout.php') ?>

<?= $this->render(
    '/permission/_form',
    [
        'model' => $model,
        'unassignedItems' => $unassignedItems,
    ]
) ?>

<?php $this->endContent() ?>
