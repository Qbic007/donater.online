<?php

namespace app\controllers;

use yii\data\ActiveDataProvider;
use yii\rest\ActiveController;

class PaymentController extends ActiveController
{
    public $modelClass = 'app\models\Payment';

    public function actions(): array
    {
        $actions = parent::actions();
        $actions['index'] = [
            'class' => 'yii\rest\IndexAction',
            'modelClass' => $this->modelClass,
            'prepareDataProvider' => fn() => new ActiveDataProvider(
                [
                    'query' => $this->modelClass::find(),
                    'pagination' => false,
                ]
            ),
        ];

        return $actions;
    }
}
