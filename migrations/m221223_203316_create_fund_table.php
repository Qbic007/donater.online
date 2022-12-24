<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%fund}}`.
 */
class m221223_203316_create_fund_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%fund}}', [
            'id' => $this->primaryKey(),
            'name' => $this->char(255),
            'description' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%fund}}');
    }
}
