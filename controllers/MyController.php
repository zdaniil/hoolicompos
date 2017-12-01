<?php
/**
 * Created by PhpStorm.
 * User: zdani
 * Date: 26.11.2017
 * Time: 20:29
 */

namespace app\controllers;


/*use yii\web\Controller;*/

class MyController extends AppController
{/*здесь все ок по стостоянию на 3.37 5 урока*/

    public function actionIndex()
    {
        $hi = 'helloworld';
        $names = ['Ivanov', 'Petrov', 'Sidorov'];
        return $this->render('index', compact('hi', 'names')); /*используем параметр render и передаем её в шаблон массивом, ключ "hello' второй параметр $hi*/
    }

    public function actionBlogPost()
    {
        // my/blog-post
        return 'Blog Post';  /*если у нас имя контроллера состоит из двухз и более слов, прописываем его action и пишем камел кэйс следующее: // имя контроллера (My)/его асtion (blog-post) эта запись переведет все символы в нижний регистр. */
    }
}

