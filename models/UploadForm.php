<?php
namespace app\models;

use app\models\Header\Header;
use app\models\Portfolio\Projects;
use app\models\Service\ServiceCategory;
use yii\base\Model;
use yii\web\UploadedFile;

class UploadForm extends Model
{
/**
* @var UploadedFile
*/
    public $imageFile;

        public function rules()
        {
            return [
                [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, pdf'],
            ];
        }
    public function attributeLabels()
    {
        return [
          'imageFile' => 'Файл'
        ];
    }

    public function uploadHeader()
        {
        if ($this->validate()) {
            $header = Header::find()->one();
            if (!empty($header->presentation)){
                unlink('uploads/' . $header->presentation);
                $header->presentation = '';
                $header->save(false);
            }
                $this->imageFile->saveAs('uploads/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
                $header->presentation = $this->imageFile->baseName . '.' . $this->imageFile->extension;
                $header->save(false);
            return true;
        } else {
            return false;
        }
        }
    public function uploadService($id)
    {
        if ($this->validate()) {
            $service = ServiceCategory::find()->where(['id' => $id])->one();
            if (!empty($service->image)){
                unlink('uploads/' . $service->image);
                $service->image = '';
                $service->save(false);
            }
            $this->imageFile->saveAs('uploads/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            $service->image = $this->imageFile->baseName . '.' . $this->imageFile->extension;
            $service->save(false);
            return true;
        } else {
            return false;
        }
    }
    public function uploadPortfolio($id)
    {
        if ($this->validate()) {
            $portfolio = Projects::find()->where(['id' => $id])->one();
            if (!empty($portfolio->image)){
                unlink('uploads/' . $portfolio->image);
                $portfolio->image = '';
                $portfolio->save(false);
            }
            $this->imageFile->saveAs('uploads/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            $portfolio->image = $this->imageFile->baseName . '.' . $this->imageFile->extension;
            $portfolio->save(false);
            return true;
        } else {
            return false;
        }
    }

}