<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Tjoba';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php
foreach ($msg as $key => $value) {
    echo $value->name."<br>";
}
       ?>
    </p>

    <!--<code><?= __FILE__ ?></code>-->
</div>
