<?php

namespace backend\models;

use common\helper\HelperFunction;
use common\models\BaseModel;
use common\models\Media;
use common\models\Medias;
use yii\base\Model;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\web\BadRequestHttpException;
use yii\web\UploadedFile;

class UploadForm extends Model
{
    public $imageFile;
    public $fileType;
    public $url;
    public $alt;
    public $type;
    public $fileName;
    const TYPE_IMAGE = 'image';
    const TYPE_VIDEO = 'video';
    const TYPE_IMAGE_BASE64 = 'base64';
    const TYPE_PDF = 'pdf';
    const FILE_TYPES = [
        self::TYPE_IMAGE => "Image",
        self::TYPE_VIDEO => "Video",
        self::TYPE_IMAGE_BASE64 => "Image/Base64",
        self::TYPE_PDF => "Pdf",
    ];

    public function rules()
    {
        return [
            [['fileType'], 'required'],
            [['url', 'alt', 'type', 'fileType', 'fileName'], 'safe'],
            # ['fileType', 'validateFileType'],
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'pdf,png, jpeg, jpg, svg, mp4'],
        ];
    }

    public function validateFileType($attribute, $params, $validator)
    {
        if (!ArrayHelper::getValue(self::FILE_TYPES, $this->$attribute, false)) {
            $this->addError($attribute, 'File type is invalid');
        }
    }


    public function upload()
    {
        $this->fileType = (int)$this->fileType;

        if ($this->fileType !== self::TYPE_IMAGE_BASE64) {
            $this->imageFile = UploadedFile::getInstanceByName("imageFile");
        }

        if (!$this->validate()) {
            throw new BadRequestHttpException('Invalid validate: ' . HelperFunction::firstError($this));
        }

        if ($this->fileType !== self::TYPE_IMAGE_BASE64) {
            // $domain = HelperFunction::getDomain();
            $basePath = '/' . date("Ydm") . "/";

            $uploadFolder = UPLOAD_PATH . $basePath;
            if (!is_dir($uploadFolder)) {
                $mkdir = mkdir($uploadFolder, 0775, TRUE);
                chmod($uploadFolder, 0775);

                if (!$mkdir) {
                    throw new BadRequestHttpException("Can't make dir $uploadFolder");
                }
            }

            $filePath = $this->imageFile->getBaseName() . "_" . \Yii::$app->security->generateRandomString(10);
            $this->url = $basePath . $filePath . "." . $this->imageFile->getExtension();
            $this->fileName = $this->imageFile->getBaseName();
            if (!$this->imageFile->saveAs($uploadFolder . $filePath . "." . $this->imageFile->getExtension())) {
                throw new BadRequestHttpException("Upload error!!");
            }
        }

        if (empty($this->alt) && $this->fileType !== self::TYPE_IMAGE_BASE64) {
            $this->alt = $this->imageFile->getBaseName() . $this->imageFile->getExtension();
        }

        $media = new Medias();
        $media->getData($this);
        if (!$media->save()) {
            throw new BadRequestHttpException('Invalid save: ' . HelperFunction::firstError($media));
        }

        return $media;
    }
}
