<?php

namespace app\models\Header;

use Yii;

/**
 * This is the model class for table "header".
 *
 * @property integer $id
 * @property string $title
 * @property string $text
 * @property string $presentation
 */
class Header extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'header';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'text', 'presentation'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'text' => 'Описание',
            'presentation' => 'Файл презентации',
        ];
    }
}
