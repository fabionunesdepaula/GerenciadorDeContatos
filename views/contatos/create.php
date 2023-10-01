<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Contatos $model */

$this->title = 'Criar Contatos';
$this->params['breadcrumbs'][] = ['label' => 'Contatos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contatos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
