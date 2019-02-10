<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Authors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="authors-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Authors', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id_author',
            'surname',
            'books',
            [
                'attribute' => 'Id book',
                'value' => 'books.id_book',
            ],
            [
                'attribute' => 'Name',
                'value' => 'books.name',
            ],
            [
                'attribute' => 'Price',
                'value' => 'books.price',
            ],
            [
                'attribute' => 'Author',
                'value' => 'books.author',
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
