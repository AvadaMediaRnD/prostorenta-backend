<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "riser".
 *
 * @property int $id
 * @property string $name
 * @property int $sort
 * @property int $house_id
 */
class Riser extends \common\models\ZModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'riser';
    }
    
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            [
                'class' => \common\components\ChangeLogBehavior::className(),
                'labelObject' => 'Стояк',
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function fields()
    {
        $fields = [
            'id', 'name', 'house_id', 'sort',
        ];
        return $fields;
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['house_id'], 'required'],
            [['house_id', 'sort'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['house_id'], 'exist', 'skipOnError' => true, 'targetClass' => House::className(), 'targetAttribute' => ['house_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('model', 'ID'),
            'name' => Yii::t('model', 'Название'),
            'sort' => Yii::t('model', 'Сортировка'),
            'house_id' => Yii::t('model', 'ЖК'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFlats()
    {
        return $this->hasMany(Flat::className(), ['riser_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMessageAddresses()
    {
        return $this->hasMany(MessageAddress::className(), ['riser_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHouse()
    {
        return $this->hasOne(House::className(), ['id' => 'house_id']);
    }
}
