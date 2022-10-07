<?php

use yii\db\Migration;

/**
 * Class m211006_115439_seed_product_table
 */
class m211006_115439_seed_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insertFakeProducts();
    }

    private function insertFakeProducts()
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 5; $i++) {
            $this->insert(
                'product',
                [
                    'name'        => $faker->name,
                    'details'       => $faker->sentence(),
                ]
            );
        }
    }


    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m211006_115439_seed_product_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211006_115439_seed_product_table cannot be reverted.\n";

        return false;
    }
    */
}
