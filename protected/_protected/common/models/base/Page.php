<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace common\models\base;

use Yii;

/**
 * This is the base-model class for table "page".
 *
 * @property integer $id
 * @property integer $status
 * @property string $name
 *
 * @property \common\models\BannerPagePosition[] $bannerPagePositions
 * @property string $aliasModel
 */
abstract class Page extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'page';
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status', 'name'], 'required'],
            [['status'], 'integer'],
            [['name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'status' => 'Status',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBannerPagePositions()
    {
        return $this->hasMany(\common\models\BannerPagePosition::className(), ['page_id' => 'id']);
    }




}
