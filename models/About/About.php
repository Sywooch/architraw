<?php

namespace app\models\About;

use Yii;

/**
 * This is the model class for table "about".
 *
 * @property int $id
 * @property string $title
 * @property string $text1
 * @property string $text2
 */
class About extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'about';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'text1', 'text2'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'text1' => 'Text1',
            'text2' => 'Text2',
        ];
    }
}
