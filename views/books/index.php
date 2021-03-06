<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Books';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="books-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Books', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id_book',
            'name',
            'price',
            'author',
            [
                'attribute' => 'Id author',
                'value' => 'authors.id_author',
            ],
            [
                'attribute' => 'Surname',
                'value' => 'authors.surname',
            ],
            [
                'attribute' => 'Books',
                'value' => 'authors.book',
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);

    ?>
</div>
