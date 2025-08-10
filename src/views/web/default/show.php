<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use portalium\content\models\Content;
use portalium\content\Module;
use portalium\theme\widgets\Panel;
/* @var $this yii\web\View */
/* @var $model portalium\content\models\Content */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Module::t('Contents'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['show', 'id' => $model->id_content]];
?>

    <?php
    echo Html::decode($model->body);
    ?>
