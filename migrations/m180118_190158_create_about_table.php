<?php

use yii\db\Migration;

/**
 * Handles the creation of table `about`.
 */
class m180118_190158_create_about_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('about', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'text1' => $this->string(),
            'text2' => $this->string()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('about');
    }
}
