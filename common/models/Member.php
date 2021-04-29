<?php

namespace common\models;

use common\helper\HelperFunction;
use Yii;

/**
 * This is the model class for table "member".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property string|null $facebook
 * @property int|null $media_id
 * @property string|null $twitter
 * @property string|null $instagram
 * @property string|null $youtube
 * @property string|null $linkedin
 * @property int $created_at
 * @property int $updated_at
 */
class Member extends BaseModel
{
    public $avatar;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'member';
    }

    /**
     * {@inheritdoc}
     */
    public function extraFields()
    {
        return [
            'avatar'
        ]; // TODO: Change the autogenerated stub
    }

    public function rules()
    {
        return [
            [['media_id', 'created_at', 'updated_at'], 'integer'],
            [['name'], 'required'],
            [['name', 'description', 'facebook', 'twitter', 'instagram', 'youtube', 'linkedin'], 'string', 'max' => 255],
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
            'description' => 'Description',
            'facebook' => 'Facebook',
            'media_id' => 'Media ID',
            'twitter' => 'Twitter',
            'instagram' => 'Instagram',
            'youtube' => 'Youtube',
            'linkedin' => 'Linkedin',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
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
}
