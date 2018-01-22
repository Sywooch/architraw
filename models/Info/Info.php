<?php

namespace app\models\Info;

use Yii;

/**
 * This is the model class for table "info".
 *
 * @property int $id
 * @property string $email
 * @property string $phone
 * @property string $address
 */
class Info extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email', 'phone', 'address'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'phone' => 'Телефон',
            'address' => 'Адрес',
        ];
    }
}
