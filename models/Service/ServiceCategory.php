<?php

namespace app\models\Service;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "service_category".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $image
 */
class ServiceCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'service_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'description', 'image'], 'string', 'max' => 255],
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
            'description' => 'Описание',
            'image' => 'Image',
        ];
    }
    public function getImage()
    {
        return ($this->image) ? '/uploads/' . $this->image : '/no-image.png';
    }
}
