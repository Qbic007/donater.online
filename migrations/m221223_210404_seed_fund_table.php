<?php

use yii\db\Migration;

/**
 * Class m221223_210404_seed_fund_table
 */
class m221223_210404_seed_fund_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insertFakeBooks();
    }

    private function insertFakeBooks()
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 50; $i++) {
            $this->insert(
                'fund',
                [
                    'description' => $faker->sentence(),
                    'name' => $faker->name,
                ]
            );
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m221223_210404_seed_fund_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221223_210404_seed_fund_table cannot be reverted.\n";

        return false;
    }
    */
}
