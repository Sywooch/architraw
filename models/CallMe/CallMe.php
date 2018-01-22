<?php

namespace app\models\CallMe;

use Yii;

/**
 * This is the model class for table "call_me".
 *
 * @property int $id
 * @property string $name
 * @property string $phone
 * @property string $email
 */
class CallMe extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'call_me';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'phone', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя клиента',
            'phone' => 'Телефон',
            'email' => 'Сообщение',
        ];
    }
}
