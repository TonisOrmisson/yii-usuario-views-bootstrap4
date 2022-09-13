# yii-usuario-views-bootstrap4
A Bootstrap 4 theme for [yii2-usuario](https://github.com/2amigos/yii2-usuario)

based on work of [lhvi](https://github.com/2amigos/yii2-usuario/pull/437)

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

run:

```composer require --prefer-dist tonisormisson/yii2-usuario-views-bootstrap4```

## Usage

In your user module config set the viewPath to the views folder of this package.

```
'user' => [
    'class' => \Da\User\Module::class,
        'viewPath' => '@vendor/tonisormisson/yii-usuario-views-bootstrap4/src/views',
]
```

In your app params, set bsVersion to 4 (required by kartik select2 dependency)
```
'params' => [
    ...
    'bsVersion' => '4',
    ...
]
```


