<?php

namespace app\controllers;

use app\models\visitors;
use yii\web\Controller;
use yii\web\HttpException;

class ApiController extends Controller
{
    public function actionVisitorsIncrement()
    {

//        var_dump( Visitors::findOne('1').Number);
        $visitors = Visitors::findOne('1');
        $visitors->count++;
        $visitors->save();

        return $visitors->count;

    }
}