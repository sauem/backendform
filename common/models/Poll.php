<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "poll".
 *
 * @property int $id
 * @property string|null $ip
 * @property int|null $product_id
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Poll extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'poll';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_id', 'created_at', 'updated_at'], 'integer'],
            [['ip'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ip' => 'Ip',
            'product_id' => 'Product ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
