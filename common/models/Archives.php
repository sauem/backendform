<?php

namespace common\models;

use common\helper\HelperFunction;
use Yii;

/**
 * This is the model class for table "archives".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $slug
 * @property int|null $active
 * @property string|null $description
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property int|null $parent_id
 * @property string|null $language
 * @property string|null $type
 */
class Archives extends \yii\db\ActiveRecord
{
    const STATUS_ACTIVE = 1;
    const STATUS_DEACTIVE = 0;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'archives';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['active', 'created_at', 'updated_at', 'parent_id'], 'integer'],
            [['description'], 'string'],
            [['name', 'slug', 'type'], 'string', 'max' => 255],
            [['language'], 'string', 'max' => 50],
            [['slug'], 'unique'],
            [['avatar', 'media_id'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'slug' => 'Slug',
            'active' => 'Active',
            'description' => 'Description',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'parent_id' => 'Parent ID',
            'language' => 'Language',
            'type' => 'Type',
        ];
    }

    public $avatar;
    public $media_id;

    const STYLE_PRODUCT = 'product';
    const STYLE_BLOG = 'article';
    const STYLE = [
        self::STYLE_BLOG => 'Danh mục bài viết',
        self::STYLE_PRODUCT => 'Danh mục sản phẩm',
    ];

    public function extraFields()
    {
        return ['avatar', 'media', 'children', 'media_id']; // TODO: Change the autogenerated stub
    }

    public function afterFind()
    {
        if ($this->media) {
            $this->avatar = HelperFunction::getImage($this->media->path);
        }
        parent::afterFind(); // TODO: Change the autogenerated stub
    }

    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes); // TODO: Change the autogenerated stub
        if ($this->media_id) {
            Medias::saveObj($this->media_id, $this->id);
        }
    }

    public function getMedia()
    {
        return $this->hasOne(Medias::className(), ['obj_id' => 'id'])->where([
            '{{medias}}.type' => Medias::ARCHIVE_TYPE
        ]);
    }

    public function getChildren()
    {
        return $this->hasMany(Archives::className(), ['parent_id' => 'id']);
    }

    public function getMeta()
    {
        return $this->hasOne(SeoMeta::className(), ['obj_id' => 'id'])
            ->where(['obj_type' => SeoMeta::META_ARCHIVE]);
    }
}