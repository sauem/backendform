<?php

namespace common\models;

use common\helper\HelperFunction;
use Yii;

/**
 * This is the model class for table "articles".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $slug
 * @property string|null $content
 * @property string|null $excerpt
 * @property string|null $status
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property string|null $language
 * @property int|null $archive_id
 * @property int|null $media_id
 */
class Articles extends BaseModel
{
    public $avatar;
    const STATUS_ACTIVE = 'public';
    const STATUS_DRAFT = 'draft';

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'articles';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['created_at', 'updated_at', 'archive_id', 'media_id'], 'integer'],
            [['name', 'slug', 'excerpt'], 'string', 'max' => 255],
            [['status', 'language'], 'string', 'max' => 50],
            [['slug'], 'unique'],
            [['avatar'], 'safe'],
            [['name', 'slug', 'content', 'media_id'], 'required'],
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
            'content' => 'Content',
            'excerpt' => 'Excerpt',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'language' => 'Language',
            'archive_id' => 'Archive ID',
            'media_id' => 'Media ID',
        ];
    }

    public function extraFields()
    {
        return ['avatar', 'media', 'meta', 'archive']; // TODO: Change the autogenerated stub
    }

    public function afterFind()
    {
        parent::afterFind(); // TODO: Change the autogenerated stub
        if ($this->media) {
            $this->avatar = HelperFunction::getImage($this->media->path);
        }
    }

    public function getMedia()
    {
        return $this->hasOne(Medias::className(), ['id' => 'media_id']);
    }

    public function getArchive()
    {
        return $this->hasOne(Archives::className(), ['id' => 'archive_id']);
    }

    public function getMeta()
    {
        return $this->hasOne(SeoMeta::className(), ['obj_id' => 'id'])
            ->where(['obj_type' => SeoMeta::META_ARTICLE]);
    }
}
