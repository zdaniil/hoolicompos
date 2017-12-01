<?php
/**
 * Created by PhpStorm.
 * User: zdani
 * Date: 26.11.2017
 * Time: 22:51
 */

namespace app\controllers\admin;


use yii\web\Controller;

class UserController extends Controller
{
    public function actionIndex()
    {
        return $this->render(\index::class);
    }
}