<?php

namespace common\models;

use Yii;
use \common\models\base\CompanyGallery as BaseCompanyGallery;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "company_gallery".
 */
class CompanyGallery extends BaseCompanyGallery
{

public function behaviors()
    {
        return ArrayHelper::merge(
            parent::behaviors(),
            [
                # custom behaviors
            ]
        );
    }

    public function rules()
    {
        return ArrayHelper::merge(
             parent::rules(),
             [
                  # custom validation rules
             ]
        );
    }
}
