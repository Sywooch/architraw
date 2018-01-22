<?php

namespace app\models\Portfolio;

use Yii;

/**
 * This is the model class for table "projects".
 *
 * @property int $id
 * @property string $category
 * @property string $name
 * @property double $flat
 * @property string $status
 * @property string $image
 */
class Projects extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'projects';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['flat'], 'number'],
            [['category', 'name', 'status', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category' => 'Категория',
            'name' => 'Название',
            'flat' => 'Общая площадь',
            'status' => 'Статус',
            'image' => 'Изображение',
        ];
    }
    public function getImage()
    {
        return ($this->image) ? '/uploads/' . $this->image : '/no-image.png';
    }
}
