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
 * @property string|null $icon
 * @property int|null $show_home
 * @property string|null $layout
 * @property int|null $banner_id
 * @property string|null $sub_title
 * @property string|null $sub_text,
 * @property string|null $layout_show
 */
class Archives extends BaseModel
{
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
            [['active', 'created_at', 'updated_at', 'parent_id', 'sort_order', 'show_home', 'banner_id'], 'integer'],
            [['description', 'sub_text'], 'string'],
            [['name', 'slug', 'type', 'sub_title'], 'string', 'max' => 255],
            [['language', 'icon', 'layout', 'layout_show'], 'string', 'max' => 50],
            [['slug'], 'unique'],
            [['media_id', 'banner', 'avatar'], 'safe']
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
            'icon' => 'Icon',
            'show_home' => 'Show Home',
            'layout' => 'Layout',
            'banner_id' => 'Banner ID',
            'sub_title' => 'Sub Title',
            'sub_text' => 'Sub Text',
            'layout_show' => 'Layout Show',
        ];
    }


    const STATUS_ACTIVE = 1;
    const STATUS_DEACTIVE = 0;
    const LAYOUT_SHOW_PRODUCT = 'product_list';
    const LAYOUT_SHOW_ARCHIVE = 'archive_list';
    public $avatar;
    public $media_id;
    public $banner;

    const STYLE_PRODUCT = 'product';
    const STYLE_BLOG = 'article';
    const STYLE = [
        self::STYLE_BLOG => 'Danh mục bài viết',
        self::STYLE_PRODUCT => 'Danh mục sản phẩm',
    ];

    public function extraFields()
    {
        return ['avatar', 'media', 'banner', 'products', 'children', 'media_id']; // TODO: Change the autogenerated stub
    }

    public function afterFind()
    {
        if ($this->media) {
            $this->avatar = HelperFunction::getImage($this->media->path);
        }
        if (!empty($this->banner_id)) {
            $this->banner = HelperFunction::getImage(null, $this->banner_id);
        }
        parent::afterFind(); // TODO: Change the autogenerated stub
    }

    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes); // TODO: Change the autogenerated stub
        if (!empty($this->media_id)) {
            Medias::saveObj($this->media_id, $this->id);
        }
    }

    public function getMedia()
    {
        return $this->hasOne(Medias::className(), ['obj_id' => 'id'])->where([
            '{{medias}}.type' => Medias::ARCHIVE_TYPE
        ]);
    }

    public function getProducts()
    {
        return $this->hasMany(Products::className(), ['default_archive' => 'id']);
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

    public function getArticles()
    {
        return $this->hasMany(Articles::className(), ['archive_id' => 'id']);
    }

}
