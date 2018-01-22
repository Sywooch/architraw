<?php

use yii\db\Migration;

/**
 * Handles the creation of table `service_category`.
 */
class m180118_133547_create_service_category_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('service_category', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'description' => $this->string(),
            'image' => $this->string()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('service_category');
    }
}
