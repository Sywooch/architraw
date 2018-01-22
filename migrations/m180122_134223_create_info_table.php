<?php

use yii\db\Migration;

/**
 * Handles the creation of table `info`.
 */
class m180122_134223_create_info_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('info', [
            'id' => $this->primaryKey(),
            'email' => $this->string(),
            'phone' => $this->string(),
            'address' => $this->string()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('info');
    }
}
