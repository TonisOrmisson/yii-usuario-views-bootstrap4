<?php

/*
 * This file is part of the 2amigos/yii2-usuario project.
 *
 * (c) 2amigOS! <http://2amigos.us/>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

use yii\helpers\Html;
use yii\widgets\Menu;

/** @var \Da\User\Module $module */
$module = Yii::$app->getModule('user');

/** @var \yii\web\Application $app */
$app = Yii::$app;

/** @var \Da\User\Model\User $user */
$user = $app->user->identity;
/** @var \yii\authclient\Collection $authClientCollection */
$authClientCollection = $app->get('authClientCollection');
$networksVisible = count($authClientCollection->clients) > 0;

?>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            <?= Html::img(
               strval($user->profile->getAvatarUrl(24)),
                [
                    'class' => 'img-rounded',
                    'alt' => $user->username,
                ]
            ) ?>
            <?= $user->username ?>
        </h3>
    </div>
    <div class="panel-body">
        <?= Menu::widget(
            [
                'options' => [
                    'class' => 'nav nav-pills nav-stacked flex-column',
                ],
                'items' => [
                    ['label' => Yii::t('usuario', 'Profile'), 'url' => ['/user/settings/profile']],
                    ['label' => Yii::t('usuario', 'Account'), 'url' => ['/user/settings/account']],
                    ['label' => Yii::t('usuario', 'Privacy'),
                        'url' => ['/user/settings/privacy'],
                        'visible' => $module->enableGdprCompliance
                    ],
                    [
                        'label' => Yii::t('usuario', 'Networks'),
                        'url' => ['/user/settings/networks'],
                        'visible' => $networksVisible,
                    ],
                ],
            ]
        ) ?>
    </div>
</div>
