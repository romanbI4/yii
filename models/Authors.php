<?php

namespace app\models;

use app\controllers\BooksController;
use Yii;

/**
 * This is the model class for table "{{%authors}}".
 *
 * @property int $id_author
 * @property string $surname
 * @property int $books
 * @property int $id_book
 */
class Authors extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%authors}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['surname', 'books', 'id_book'], 'required'],
            [['books', 'id_book'], 'integer'],
            [['surname'], 'string', 'max' => 11],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_author' => 'Id Author',
            'surname' => 'Surname',
            'books' => 'Books',
            'id_book' => 'Id Book',
        ];
    }

    public function getBooks()
    {
        return $this->hasMany(Books::className(), ['id_author' => 'id_author']);
    }

}
