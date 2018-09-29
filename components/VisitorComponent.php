<?php
namespace app\components;

use app\models\Visits;
use yii\web\Cookie;

class VisitorComponent
{
    const VISITOR = '_visitor';
    public static function isNewVisitor(){
        return !isset(\Yii::$app->request->cookies[self::VISITOR]);
    }

    public static function updateVisitsCounters(){
        $visit = Visits::find()->where(['date' => date('Y-m-d')])->one();

        if (!$visit){
            $visit = new Visits();
            $visit->date = date('Y-m-d');
            $visit->save();
        }
        else{
            $visit->updateCounters(['visits' => 1]);
        }

        $cookies = \Yii::$app->response->cookies;

        $cookies->add(new \yii\web\Cookie([
            'name' => self::VISITOR,
            'value' => 1,
            'expire' => time() + 60 * 60 * 24 * 365,
        ]));
    }
}