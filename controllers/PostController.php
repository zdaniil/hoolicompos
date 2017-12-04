<?php
/**
 * Created by PhpStorm.
 * User: zdani
 * Date: 01.12.2017
 * Time: 23:54
 */

namespace app\controllers;

use Yii;

class PostController extends AppController
{

    public $layout = 'basic'; /*здесь мы можем установить шаблон для всего контроллера AppController*/

    public function actionIndex() /*здесь будут выводиться в статьи*/
    {

        return $this->render('test');
    }

    public function actionShow() /*здесь будут выводиться в статьи*/
    {
        $this->layout = 'basic';  /*используем шаблон для конкретной старницы views/layouts/basic.php*/
        return $this->render('show'); /*'show'- это подключение вида show*/
    }

    /*public function actionShow() /*здесь будет выводиться выбранная статья допустим для конкретной страницы*/
    /* {


     }*/

}

