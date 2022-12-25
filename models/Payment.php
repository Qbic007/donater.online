<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "payment".
 *
 * @property int $id
 * @property int|null $amount
 * @property int|null $status
 */
class Payment extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'payment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['amount', 'status'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'amount' => 'Amount',
            'status' => 'Status',
        ];
    }
}
