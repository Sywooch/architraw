<?php

use yii\db\Migration;

/**
 * Handles the creation of table `blog`.
 */
class m180125_153923_create_blog_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('blog', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'subtitle' => $this->string(),
            'description' => $this->string(),
            'text' => $this->string(),
            'views' => $this->integer(),
            'created_at' => $this->dateTime(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('blog');
    }
}
