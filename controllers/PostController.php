<?php
/**
 * Created by PhpStorm.
 * User: zdani
 * Date: 01.12.2017
 * Time: 23:54
 */

namespace app\controllers;


class PostController extends AppController
{
    public function actionTest()
    {


        $names = ['Ivanov', 'Petrov', 'Sidorov'];


        return $this->render('test');

    }
}

