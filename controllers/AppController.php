<?php

namespace app\controllers;

use yii\web\Controller;

class AppController extends Controller
{

    public function debug($arr)
    {

        echo '<pre>' . print_r($arr, true) . '</pre>';
        $names = ['Ivanov', 'Petrov', 'Sidorov'];

        print_r($names);
        var_dump($names);

        return $this->render('test');
    }

}

