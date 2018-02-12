<?php

namespace app\models\Blog;

use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;

/**
 * This is the model class for table "blog".
 *
 * @property int $id
 * @property string $title
 * @property string $sub-title
 * @property string $description
 * @property string $text
 * @property int $views
 * @property string $created_at
 */
class Blog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public function behaviors()
    {
        return [[
            'class' => TimestampBehavior::className(),
            'attributes' => [
                ActiveRecord::EVENT_BEFORE_INSERT => ['created_at'],
            ],
            'value' => new Expression('NOW()'),
        ],
        ];
    }
    public static function tableName()
    {
        return 'blog';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['views'], 'integer'],
            [['created_at'], 'safe'],
            [['title', 'subtitle', 'description', 'text'], 'string', 'max' => 255],
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
            'subtitle' => 'Подзаголовок',
            'description' => 'Краткое содержание',
            'text' => 'Текст',
            'views' => 'Просмотров',
            'created_at' => 'Дата написания',
        ];
    }
    public function viewedCounter()
    {
        $this->views += 1;
        return $this->save(false);
    }
    public function getDate() {
        return Yii::$app->formatter->asDate($this->date, 'd.MM.yyyy');
    }
}
