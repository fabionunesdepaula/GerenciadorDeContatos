<?php

use app\models\Contatos;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\ContatosSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Gerencia Contatos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contatos-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Criar Contatos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <p>
        Para ordenar por Nome, clique sobre o campo Nome. Para ordenar por Email, clique sobre o campo Email.
    </p>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'nome',
                'format' => 'text', // Define o formato da coluna como texto
                'label' => 'Nome', // Rótulo da coluna
            ],
            [
                'attribute' => 'email',
                'format' => 'email', // Define o formato da coluna como email
                'label' => 'Email', // Rótulo da coluna
            ],
            'telefone',
            'nota:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Contatos $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>
</div>
