<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
$this->registerJsFile('js/test.js')
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Hello!
    </p>

    <code><?= __FILE__ ?></code>
</div>