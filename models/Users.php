<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $id
 * @property string $fio
 * @property string $phone
 * @property integer $country
 *
 * @property Countries $country0
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['country_id'], 'integer'],
            [['fio'], 'string', 'max' => 100],
            [['phone'], 'string', 'max' => 30],
            [['country_id'], 'exist', 'skipOnError' => true, 'targetClass' => Countries::className(), 'targetAttribute' => ['country_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
//            'id' => 'ID',
            'fio' => 'ФИО',
            'phone' => 'Телефон',
            'country_id' => 'Страна'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCountry()
    {

        return $this->hasOne(Countries::className(), ['id' => 'country_id']);
    }
}
