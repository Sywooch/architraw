<?php

use yii\db\Migration;

/**
 * Handles the creation of table `header`.
 */
class m180118_124634_create_header_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('header', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'text' => $this->string(),
            'presentation' => $this->string()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('header');
    }
}
