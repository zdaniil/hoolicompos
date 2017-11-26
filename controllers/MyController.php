<?php
/**
 * Created by PhpStorm.
 * User: zdani
 * Date: 26.11.2017
 * Time: 20:29
 */

namespace app\controllers;


use yii\web\Controller;

class MyController extends Controller
{
    public function actionIndex(){
        $hi = 'helloworld';
        $names = ['Ivanov', 'Petrov', 'Sidorov'];
        return $this->render('index', ['hello' => $names]); /*используем параметр render и передаем её в шаблон массивом, ключ "hello' второй параметр $hi*/
    }
}