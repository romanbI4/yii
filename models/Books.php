<?php

namespace app\models;

use app\controllers\AuthorsController;
use Yii;

/**
 * This is the model class for table "{{%books}}".
 *
 * @property int $id_book
 * @property string $name
 * @property int $price
 * @property string $author
 */
class Books extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%books}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'price', 'author'], 'required'],
            [['price'], 'integer'],
            [['name', 'author'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_book' => 'Id Book',
            'name' => 'Name',
            'price' => 'Price',
            'author' => 'Author',
        ];
    }

    public function getAuthors()
    {
        return $this->hasOne(Authors::className(), ['id_author' => 'id_author']);
    }
}
