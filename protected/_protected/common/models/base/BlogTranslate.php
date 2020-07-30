<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace common\models\base;

use Yii;
use yii\behaviors\SluggableBehavior;

/**
 * This is the base-model class for table "blog_translate".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property integer $lang_id
 * @property integer $blog_id
 * @property string $url
 * @property string $meta_title
 * @property string $meta_description
 * @property string $meta_keywords
 *
 * @property \common\models\Blog $blog
 * @property \common\models\Lang $lang
 * @property string $aliasModel
 */
abstract class BlogTranslate extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blog_translate';
    }

    public function behaviors()
    {
        return [
            [
                'class' => SluggableBehavior::className(),
                'attribute' => 'url',
                'slugAttribute' => 'url',
                'ensureUnique'=>true,
            ]
        ];
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'lang_id', 'blog_id'], 'required'],
            [['description'], 'string'],
            [['lang_id', 'blog_id'], 'integer'],
            [['title', 'url', 'meta_title', 'meta_description', 'meta_keywords'], 'string', 'max' => 255],
            [['url'], 'unique'],
            [['blog_id'], 'exist', 'skipOnError' => true, 'targetClass' => \common\models\Blog::className(), 'targetAttribute' => ['blog_id' => 'id']],
            [['lang_id'], 'exist', 'skipOnError' => true, 'targetClass' => \common\models\Lang::className(), 'targetAttribute' => ['lang_id' => 'id']]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'lang_id' => 'Lang ID',
            'blog_id' => 'Blog ID',
            'url' => 'Url',
            'meta_title' => 'Meta Title',
            'meta_description' => 'Meta Description',
            'meta_keywords' => 'Meta Keywords',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBlog()
    {
        return $this->hasOne(\common\models\Blog::className(), ['id' => 'blog_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLang()
    {
        return $this->hasOne(\common\models\Lang::className(), ['id' => 'lang_id']);
    }




}